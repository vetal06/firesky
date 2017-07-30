<?php

namespace app\modules\ceo\controllers\admin;

use app\modules\ceo\components\UrlParser;
use Yii;
use app\modules\ceo\models\Ceo;
use app\modules\ceo\models\CeoSearch;

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
     * @param string $url
     * @return mixed
     */
    public function actionView($url)
    {
        return $this->render('view', [
            'model' => $this->findModel($url),
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

            $ceoData = Ceo::findByRoute($model->url);
            if ($ceoData) {
                return $this->render('create_step_1', compact('model', 'ceoData'));
            }
            if($model->save()) {
                return $this->redirect(['view', 'url' => $model->url]);
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
     * @param string $url
     * @return mixed
     */
    public function actionUpdate($url)
    {
        $model = $this->findModel($url);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'url' => $model->url]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ceo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $url
     * @return mixed
     */
    public function actionDelete($url, $route_parameters)
    {
        $this->findModel($url)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ceo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $url
     * @return Ceo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($url)
    {
        if (($model = Ceo::findOne(['url' => $url])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
