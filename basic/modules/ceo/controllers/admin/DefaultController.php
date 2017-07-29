<?php

namespace app\modules\ceo\controllers\admin;

use app\modules\ceo\components\UrlParser;
use Yii;
use app\modules\ceo\models\Ceo;
use app\modules\ceo\models\CeoSearch;
use yii\base\Exception;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for Ceo model.
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Ceo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CeoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ceo model.
     * @param string $route_name
     * @param string $route_parameters
     * @return mixed
     */
    public function actionView($route_name, $route_parameters)
    {
        return $this->render('view', [
            'model' => $this->findModel($route_name, $route_parameters),
        ]);
    }

    /**
     * Creates a new Ceo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ceo();
        if ($model->load(Yii::$app->request->post()) && !empty($model->url)) {
            if (empty($model->route_name)) {
                $urlParseData = (new UrlParser($model->url))->parse();
                $model->route_name = $urlParseData['name'];
                $model->route_parameters =  empty($urlParseData['params'])?'{}':Json::encode($urlParseData['params']);
            }
            if ($ceoDataList = Ceo::findByRoute($model->route_name, $model->route_parameters)->all()) {
                return $this->render('create_step_1', compact('model', 'ceoDataList'));
            }
            if($model->save()) {
                return $this->redirect(['view', 'route_name' => $model->route_name, 'route_parameters' => $model->route_parameters]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }
        return $this->render('create_step_1', compact('model'));
    }

    /**
     * Updates an existing Ceo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $route_name
     * @param string $route_parameters
     * @return mixed
     */
    public function actionUpdate($route_name, $route_parameters)
    {
        $model = $this->findModel($route_name, $route_parameters);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'route_name' => $model->route_name, 'route_parameters' => $model->route_parameters]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ceo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $route_name
     * @param string $route_parameters
     * @return mixed
     */
    public function actionDelete($route_name, $route_parameters)
    {
        $this->findModel($route_name, $route_parameters)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ceo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $route_name
     * @param string $route_parameters
     * @return Ceo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($route_name, $route_parameters)
    {
        if (($model = Ceo::findOne(['route_name' => $route_name, 'route_parameters' => $route_parameters])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
