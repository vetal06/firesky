<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="svg-icon__angle-right" viewBox="0 0 284.935 284.936">
    <path
        d="M222.701 135.9L89.652 2.857C87.748.955 85.557 0 83.084 0c-2.474 0-4.664.955-6.567 2.857L62.244 17.133c-1.906 1.903-2.855 4.089-2.855 6.567 0 2.478.949 4.664 2.855 6.567l112.204 112.204L62.244 254.677c-1.906 1.903-2.855 4.093-2.855 6.564 0 2.477.949 4.667 2.855 6.57l14.274 14.271c1.903 1.905 4.093 2.854 6.567 2.854 2.473 0 4.663-.951 6.567-2.854l133.042-133.044c1.902-1.902 2.854-4.093 2.854-6.567s-.945-4.664-2.847-6.571z"></path>
  </symbol>
  <symbol id="svg-icon__arrow-big-left" viewBox="0 0 15 52">
    <path d="M14 0l.89.46-14 26L0 26z"></path>
    <path d="M.89 25.51l-.89.45 14.12 25.57.89-.45z"></path>
  </symbol>
  <symbol id="svg-icon__arrow-big-right" viewBox="0 0 15 52">
    <path d="M.99 0L.13.46l13.6 25.89.86-.46z"></path>
    <path d="M13.72 25.42l.87.45L.89 51.33l-.87-.45z"></path>
  </symbol>
  <symbol id="svg-icon__arrow-down" viewBox="0 0 11.99 8">
    <path d="M2.13.39L8.01 6.1 6.2 8 .3 2.29A1.27 1.27 0 0 1 .38.56 1.36 1.36 0 0 1 2.13.39z"></path>
    <path d="M11.81 2L6.2 8 4.3 6.18l5.61-6a1.79 1.79 0 0 1 1.75.12 1.67 1.67 0 0 1 .15 1.7z"></path>
  </symbol>
  <symbol id="svg-icon__arrow-right" viewBox="0 0 4 7">
    <path d="M1.23.22L3.8 2.97a.78.78 0 0 1 0 1.07.7.7 0 0 1-1 0L.23 1.29a.78.78 0 0 1 0-1.07.7.7 0 0 1 1 0z"></path>
    <path d="M1.23 6.78L3.8 4.03a.78.78 0 0 0 0-1.07.7.7 0 0 0-1 0L.23 5.71a.78.78 0 0 0 0 1.07.7.7 0 0 0 1 0z"></path>
  </symbol>
  <symbol id="svg-icon__arrow-top" viewBox="0 0 11.99 8">
    <path d="M2.13 7.61L8.01 1.9 6.2-.02.3 5.71a1.27 1.27 0 0 0 .08 1.73 1.36 1.36 0 0 0 1.75.17z"></path>
    <path d="M11.81 5.98l-5.61-6-1.9 1.84 5.61 6a1.79 1.79 0 0 0 1.75-.12 1.67 1.67 0 0 0 .15-1.72z"></path>
  </symbol>
  <symbol id="svg-icon__arrow" viewBox="0 0 15 6">
    <path d="M15 3l-3-3v2H0v2h12v2z"></path>
  </symbol>
  <symbol id="svg-icon__available" viewBox="0 0 15 14">
    <path
        d="M1.44 5.13s4.5 3.79 4.61 3.79c2.75-3.7 7.27-8.93 7.27-8.93l1.53 1s-6.83 10.53-8.42 12.9a64 64 0 0 1-6.43-7z"></path>
  </symbol>
  <symbol id="svg-icon__calendar" viewBox="0 0 13 12">
    <path
        d="M12 12H1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h1a1 1 0 1 1 2 0h5a1 1 0 1 1 2 0h1a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1zm-1-9H2v7h9V3zM5 5H4V4h1v1zm0 2H4V6h1v1zm0 2H4V8h1v1zm2-4H6V4h1v1zm0 2H6V6h1v1zm0 2H6V8h1v1zm2-4H8V4h1v1zm0 2H8V6h1v1zm0 2H8V8h1v1z"
        class="cls-1"></path>
  </symbol>
  <symbol id="svg-icon__cart-small" viewBox="0 0 16.03 16.65">
    <path class="cls-1"
          d="M4.97 14.63a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zM14.8 2.7H3.89L3.8 1.57S2.91-.04 1.67-.04c0 0-1.67.5-1.67 1.62h1.58s1.53 10.17 1.53 10.43a2 2 0 0 0 1.1 1.6h10.12c.85 0 .85-1.95 0-1.95H4.81l-.25-1.07 10.23.11a1.23 1.23 0 0 0 1.24-1.19V3.9a1.29 1.29 0 0 0-1.23-1.2zm-.81 5.39a.6.6 0 0 1-.6.61l-8.29.06a.6.6 0 0 1-.6-.6l-.23-2.89a.6.6 0 0 1 .6-.6l8.52-.06a.6.6 0 0 1 .6.6v2.88zm-2.02 6.54a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1z"></path>
  </symbol>
  <symbol id="svg-icon__cart" viewBox="0 0 35 32">
    <path
        d="M34.73 9.26l-6 13A3 3 0 0 1 26 24H7a3 3 0 0 1-3-3V6.12L.44 2.56A1.5 1.5 0 1 1 2.56.44L7.12 5H32a3 3 0 0 1 2.73 4.26zM7 21h19l3.69-8H7v8zM32 8H7v2h24.08L32 8zM8 26a3 3 0 1 1-3 3 3 3 0 0 1 3-3zm16 0a3 3 0 1 1-3 3 3 3 0 0 1 3-3z"></path>
  </symbol>
  <symbol id="svg-icon__clock-big" viewBox="0 0 36 36">
    <path d="M18 0a18 18 0 1 0 18 18A18 18 0 0 0 18 0zm0 32a14 14 0 1 1 14-14 14 14 0 0 1-14 14z"></path>
    <path d="M16.73 10h1.66l.67 10-3.07.05z"></path>
    <path d="M16.13 19.87l1.7-2.64 6.14 5.12-.62 1.36z"></path>
  </symbol>
  <symbol id="svg-icon__close-bold" viewBox="0 0 7 7">
    <path d="M.15.13a.56.56 0 0 1 .78.06l5.89 5.89a.52.52 0 1 1-.72.72L.21.91A.56.56 0 0 1 .15.13z"></path>
    <path d="M6.86.13a.56.56 0 0 0-.78.06L.19 6.08a.52.52 0 1 0 .72.72L6.8.91a.56.56 0 0 0 .06-.78z"></path>
  </symbol>
  <symbol id="svg-icon__close" viewBox="0 0 16 16">
    <path d="M.66.7l.71-.71 15 15-.71.71z"></path>
    <path d="M16.02 1.06l-.7-.72-15.3 15.3.72.72z"></path>
  </symbol>
  <symbol id="svg-icon__compare" viewBox="0 0 13 15">
    <path
        d="M0 13v2h13v-2H0zM5 0a1.08 1.08 0 0 0-1 1v11h2V1a1.08 1.08 0 0 0-1-1zm6 2a1.08 1.08 0 0 0-1 1v9h2V3a1.08 1.08 0 0 0-1-1zM8 6a1.08 1.08 0 0 0-1 1v5h2V7a1.08 1.08 0 0 0-1-1zM2 4a1.08 1.08 0 0 0-1 1v7h2V5a1.08 1.08 0 0 0-1-1z"></path>
  </symbol>
  <symbol id="svg-icon__delete" viewBox="0 0 20 20">
    <path d="M10-.01a10 10 0 1 0 10 10 10 10 0 0 0-10-10zm0 19a9 9 0 1 1 9-9 9 9 0 0 1-9 9z"></path>
    <path d="M13.72 6.29a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 1.4 1.4l6-6a1 1 0 0 0 0-1.4z"></path>
    <path d="M6.31 6.29a1 1 0 0 1 1.4 0l6 6a1 1 0 1 1-1.4 1.4l-6-6a1 1 0 0 1 0-1.4z"></path>
  </symbol>
  <symbol id="svg-icon__delivery" viewBox="0 0 30 19">
    <path
        d="M27-.01H13c-1.86 0-2.87.82-2.87 3l.87.21v12.44c0 1.11 1.81 1.35 3 1.35h9a2 2 0 0 1-2-2h-9v-13h16v13h-3a2 2 0 0 1-2 2h4c2.21 0 3-.79 3-3v-11c0-2.2-.79-3-3-3z"></path>
    <path
        d="M12 9.99h16v1H12v-1zm11 2a3 3 0 0 0-3 3 2.07 2.07 0 0 0 0 .5 2.93 2.93 0 0 0 .72 1.5 3 3 0 0 0 2.23 1 2.94 2.94 0 0 0 2.23-1 2.78 2.78 0 0 0 .72-1.5 2.07 2.07 0 0 0 0-.5 3 3 0 0 0-2.9-3zm-2 3a2 2 0 0 1 1.77-2 1.33 1.33 0 0 1 .46 0 2 2 0 1 1-2.23 2z"></path>
    <path
        d="M25.95 15.5a2.15 2.15 0 0 0-.12-.5 3 3 0 0 0-2.6-2 2 2 0 1 1-.46 0 3 3 0 0 0-2.59 2 1.76 1.76 0 0 0-.13.5 2.07 2.07 0 0 0 0 .5 2.77 2.77 0 0 0 .18 1 3 3 0 0 0 5.82-1 2.07 2.07 0 0 0-.1-.5zM6 4.99h5.78v-2H5S.19 8.89 0 9.6v4.39c.52 2.18 4 3 4 3h3a2 2 0 0 1-2-2H2v-5zm8.25 12l-3.25-2H9a2 2 0 0 1-2 2h7.25z"></path>
    <path
        d="M10 5.99H7l-3 4h6v-4zm-3 6a3 3 0 0 0-3 3 2.07 2.07 0 0 0 0 .5 2.93 2.93 0 0 0 .72 1.5 3 3 0 0 0 2.23 1 2.94 2.94 0 0 0 2.23-1 2.78 2.78 0 0 0 .72-1.5 2.07 2.07 0 0 0 0-.5 3 3 0 0 0-2.9-3zm-2 3a2 2 0 0 1 1.77-2 1.33 1.33 0 0 1 .46 0 2 2 0 1 1-2.23 2z"></path>
    <path
        d="M9.95 15.5a2.15 2.15 0 0 0-.12-.5 3 3 0 0 0-2.6-2 2 2 0 1 1-.46 0 3 3 0 0 0-2.59 2 1.76 1.76 0 0 0-.13.5 2.07 2.07 0 0 0 0 .5 2.77 2.77 0 0 0 .18 1 3 3 0 0 0 5.82-1 2.07 2.07 0 0 0-.1-.5z"></path>
  </symbol>
  <symbol id="svg-icon__download" viewBox="0.328 0 512 526.05">
    <path
        d="M482.842 308.102c-16.287 0-29.486 13.194-29.486 29.486v129.488H59.302V337.588c0-16.292-13.188-29.486-29.486-29.486C13.53 308.102.33 321.296.33 337.588v158.975c0 16.287 13.2 29.487 29.486 29.487h453.026c16.287 0 29.487-13.2 29.487-29.487V337.588c0-16.292-13.2-29.486-29.488-29.486z"></path>
    <path
        d="M235.473 374.613a29.506 29.506 0 0 0 20.854 8.64 29.412 29.412 0 0 0 20.845-8.64l118.903-118.905c11.518-11.51 11.518-30.18 0-41.693-11.507-11.52-30.19-11.52-41.696 0l-68.57 68.568V29.487C285.81 13.197 272.61 0 256.328 0 240.04 0 226.84 13.197 226.84 29.487v253.09l-68.55-68.557c-11.52-11.52-30.195-11.513-41.702-.006-11.507 11.52-11.507 30.19-.006 41.7l118.89 118.9z"></path>
  </symbol>
  <symbol id="svg-icon__facebook-logo" viewBox="0 0 96.124 96.123">
    <path
        d="M72.089.02L59.624 0C45.62 0 36.57 9.285 36.57 23.656v10.907H24.037a1.96 1.96 0 0 0-1.96 1.961v15.803a1.96 1.96 0 0 0 1.96 1.96H36.57v39.876a1.96 1.96 0 0 0 1.96 1.96h16.352a1.96 1.96 0 0 0 1.96-1.96V54.287h14.654a1.96 1.96 0 0 0 1.96-1.96l.006-15.803a1.963 1.963 0 0 0-1.961-1.961H56.842v-9.246c0-4.444 1.059-6.7 6.848-6.7l8.397-.003a1.96 1.96 0 0 0 1.959-1.96V1.98A1.96 1.96 0 0 0 72.089.02z"></path>
  </symbol>
  <symbol id="svg-icon__facebook" viewBox="0 0 56.693 56.693">
    <path
        d="M40.43 21.739h-7.645v-5.014c0-1.883 1.248-2.322 2.127-2.322h5.395V6.125l-7.43-.029c-8.248 0-10.125 6.174-10.125 10.125v5.518h-4.77v8.53h4.77v24.137h10.033V30.269h6.77l.875-8.53z"></path>
  </symbol>
  <symbol id="svg-icon__google-plus-logo" viewBox="0 0 96.828 96.827">
    <path
        d="M62.617 0H39.525c-10.29 0-17.413 2.256-23.824 7.552-5.042 4.35-8.051 10.672-8.051 16.912 0 9.614 7.33 19.831 20.913 19.831 1.306 0 2.752-.134 4.028-.253l-.188.457c-.546 1.308-1.063 2.542-1.063 4.468 0 3.75 1.809 6.063 3.558 8.298l.22.283-.391.027c-5.609.384-16.049 1.1-23.675 5.787-9.007 5.355-9.707 13.145-9.707 15.404 0 8.988 8.376 18.06 27.09 18.06 21.76 0 33.146-12.005 33.146-23.863.002-8.771-5.141-13.101-10.6-17.698l-4.605-3.582c-1.423-1.179-3.195-2.646-3.195-5.364 0-2.672 1.772-4.436 3.336-5.992l.163-.165c4.973-3.917 10.609-8.358 10.609-17.964 0-9.658-6.035-14.649-8.937-17.048h7.663a.488.488 0 0 0 .266-.077l6.601-4.15A.5.5 0 0 0 62.617 0zM34.614 91.535c-13.264 0-22.176-6.195-22.176-15.416 0-6.021 3.645-10.396 10.824-12.997 5.749-1.935 13.17-2.031 13.244-2.031 1.257 0 1.889 0 2.893.126 9.281 6.605 13.743 10.073 13.743 16.678-.001 8.414-7.101 13.64-18.528 13.64zm-.125-50.779c-11.132 0-15.752-14.633-15.752-22.468 0-3.984.906-7.042 2.77-9.351 2.023-2.531 5.487-4.166 8.825-4.166 10.221 0 15.873 13.738 15.873 23.233 0 1.498 0 6.055-3.148 9.22-2.117 2.113-5.56 3.532-8.568 3.532zm60.493 4.467H82.814V33.098a.5.5 0 0 0-.5-.5H77.08a.5.5 0 0 0-.5.5v12.125H64.473a.5.5 0 0 0-.5.5v5.304a.5.5 0 0 0 .5.5H76.58V63.73a.5.5 0 0 0 .5.5h5.234c.275 0 .5-.225.5-.5V51.525h12.168a.5.5 0 0 0 .5-.5v-5.302c0-.277-.223-.5-.5-.5z"></path>
  </symbol>
  <symbol id="svg-icon__google-plus" viewBox="0 0 56.6934 56.6934">
    <path
        d="M19.667 25.787c-.007 1.793 0 3.587.008 5.38 3.006.098 6.02.053 9.027.098-1.326 6.669-10.399 8.832-15.199 4.476-4.936-3.82-4.702-12.2.43-15.749 3.587-2.864 8.688-2.155 12.275.324 1.41-1.304 2.728-2.698 4.001-4.144-2.984-2.382-6.646-4.077-10.542-3.896-8.13-.272-15.606 6.85-15.741 14.98-.52 6.646 3.85 13.165 10.022 15.516 6.149 2.366 14.03.753 17.957-4.77 2.592-3.49 3.15-7.98 2.848-12.2-5.034-.038-10.06-.03-15.086-.015zm29.403-.023c-.015-1.5-.022-3.007-.03-4.506h-4.483c-.015 1.5-.03 2.999-.038 4.506-1.507.008-3.007.015-4.506.03v4.484l4.506.045c.015 1.5.015 3 .03 4.499h4.491c.008-1.5.015-3 .03-4.506 1.507-.015 3.007-.023 4.507-.038v-4.484c-1.5-.015-3.007-.015-4.507-.03z"></path>
  </symbol>
  <symbol id="svg-icon__hamburger" viewBox="0 0 22 18">
    <path d="M0 0h22v4H0V0zm0 7h22v4H0V7zm0 7h22v4H0v-4z"></path>
  </symbol>
  <symbol id="svg-icon__heart" viewBox="0 0 16 15">
    <path
        d="M8.01 15c-8.53-6.19-8-10-8-10a4.77 4.77 0 0 1 4.5-5 3.94 3.94 0 0 1 3.5 1.42A3.94 3.94 0 0 1 11.51 0a4.77 4.77 0 0 1 4.5 5s.5 3.81-8 10zm0-2.23c3.63-3.07 5.56-5.38 5.87-6.9a3.51 3.51 0 0 0 .09-.56v-.56a3.35 3.35 0 0 0-.48-1.54 2.88 2.88 0 0 0-.28-.37l-.07-.07a2.62 2.62 0 0 0-.28-.26l-.15-.1a2.39 2.39 0 0 0-.26-.16l-.25-.1-.2-.07a2.1 2.1 0 0 0-.49-.08 1.8 1.8 0 0 0-.42.08L11.01 2c-2.22 0-3 2.5-3 2.5S7.23 2 5.01 2l-.05.05A2 2 0 0 0 4.51 2a2.1 2.1 0 0 0-.49.06l-.2.07-.26.1a2.4 2.4 0 0 0-.26.16l-.15.1a2.57 2.57 0 0 0-.28.26l-.07.07a2.91 2.91 0 0 0-.28.37 3.35 3.35 0 0 0-.48 1.54v.56a3.49 3.49 0 0 0 .09.56C2.45 7.37 4.5 9.78 8 12.75"></path>
  </symbol>
  <symbol id="svg-icon__hit" viewBox="0 0 33.98 43.99">
    <path class="cls-1"
          d="M19.88.04c.69.25 1.72 3.55 1.75 6.48 0 5.08-1.21 8.05 2.52 11 .43.34-.17-1.73.05-4.15.19-2.06 1.92-4.68 1.86-4.27a9 9 0 0 0 1.18 5.37c5.17 6.44 6.74 12.17 6.74 16.07 0 7.43-7.61 13.45-17 13.45s-17-6-17-13.45c0-2.94 1.19-9.7 3.22-11.92.21-.23-.11.31-.14.84-.08 1.46-.14 4.33 2.42 4.31 3.18 0 1.79-5.8 4.1-10.81 3-6.57 8.7-3.76 10.28-12.74.07-.23-.17-.23.02-.18z"></path>
  </symbol>
  <symbol id="svg-icon__instagram" viewBox="0 0 56.693 56.693">
    <path
        d="M43.414 4.831H13c-5.283 0-9.581 4.297-9.581 9.58v30.415c0 5.283 4.298 9.58 9.581 9.58h30.415c5.283 0 9.58-4.297 9.58-9.58V14.41c-.001-5.283-4.298-9.579-9.581-9.579zm2.748 5.713l1.096-.004v8.403l-8.375.027-.029-8.402 7.308-.024zM21.131 24.53c1.588-2.197 4.164-3.638 7.076-3.638s5.488 1.441 7.074 3.638a8.677 8.677 0 0 1 1.652 5.088c0 4.811-3.918 8.725-8.727 8.725-4.812 0-8.726-3.914-8.726-8.725a8.683 8.683 0 0 1 1.651-5.088zm27.033 20.295a4.754 4.754 0 0 1-4.75 4.75H13a4.755 4.755 0 0 1-4.751-4.75V24.53h7.4a13.483 13.483 0 0 0-.998 5.088c0 7.473 6.08 13.557 13.556 13.557 7.475 0 13.555-6.084 13.555-13.557 0-1.799-.361-3.516-1-5.088h7.402v20.295z"></path>
  </symbol>
  <symbol id="svg-icon__like" viewBox="0 0 32 32">
    <path
        d="M29.826 17.885a5.562 5.562 0 0 0 .942-3.135c0-1.321-.487-2.468-1.461-3.443-.975-.974-2.128-1.461-3.462-1.461H22.46c.615-1.269.923-2.5.923-3.692 0-1.5-.225-2.692-.673-3.577S21.607 1.042 20.748.625C19.889.208 18.921 0 17.844 0c-.654 0-1.231.237-1.731.712-.551.538-.949 1.231-1.192 2.077s-.439 1.657-.587 2.433c-.147.776-.375 1.324-.683 1.644a36.95 36.95 0 0 0-2.058 2.462c-1.295 1.679-2.173 2.673-2.634 2.981H3.69c-.679 0-1.26.241-1.74.721s-.721 1.061-.721 1.74v12.307c0 .68.24 1.259.721 1.74s1.061.721 1.74.721h5.538c.282 0 1.167.256 2.654.769 1.577.551 2.965.971 4.163 1.26s2.413.433 3.644.433h2.481c1.808 0 3.262-.516 4.365-1.548s1.647-2.439 1.635-4.221c.769-.987 1.154-2.128 1.154-3.423 0-.282-.019-.558-.058-.827a5.524 5.524 0 0 0 .731-2.769c0-.462-.058-.904-.173-1.327zM5.789 26.711c-.244.243-.532.366-.865.366s-.622-.122-.865-.366c-.244-.243-.365-.532-.365-.866s.122-.622.365-.865c.244-.244.532-.365.865-.365s.622.122.865.365c.244.244.365.532.365.865s-.122.622-.365.866zm22.105-10.383c-.276.59-.619.891-1.029.904.192.218.353.523.481.913s.192.747.192 1.067c0 .884-.339 1.647-1.019 2.288.231.41.346.853.346 1.327s-.112.946-.337 1.413c-.224.467-.529.804-.913 1.009.064.385.096.744.096 1.077 0 2.141-1.231 3.211-3.693 3.211h-2.326c-1.68 0-3.872-.468-6.577-1.404a100.938 100.938 0 0 0-1.241-.442c-.148-.052-.372-.125-.673-.221s-.545-.167-.731-.212c-.186-.045-.397-.086-.634-.125s-.439-.058-.606-.058h-.615V14.768h.615c.205 0 .433-.058.683-.173s.507-.288.769-.519c.263-.231.509-.458.74-.683s.487-.506.769-.846a37.543 37.543 0 0 0 1.269-1.606c.243-.32.391-.513.442-.577.705-.872 1.199-1.455 1.481-1.75.526-.551.907-1.253 1.144-2.106s.433-1.657.586-2.413c.154-.756.398-1.301.731-1.635 1.23 0 2.051.301 2.461.904s.615 1.532.615 2.788c0 .756-.308 1.785-.923 3.086s-.923 2.324-.923 3.067h6.769c.642 0 1.212.247 1.712.741s.751 1.067.751 1.721c0 .449-.138.968-.414 1.558z"></path>
  </symbol>
  <symbol id="svg-icon__list" viewBox="0 0 12 10">
    <path d="M0 0h12v2H0V0zm0 4h12v2H0V4zm0 4h12v2H0V8z"></path>
  </symbol>
  <symbol id="svg-icon__minus" viewBox="0 0 14 2">
    <path d="M0-.01h14v2H0v-2z"></path>
  </symbol>
  <symbol id="svg-icon__new" viewBox="0 0 41.99 41.99">
    <path
        d="M39.21 24.69l1.1 4.49-3.8 2.12-.91 4.49-4.16.71-2.29 4.11-4.67-1.51-3.44 2.9-3.87-2.85-4.42 1.28-2.25-3.84-4.43-.82-.92-4.72-3.84-2 1-4.42L0 20.92l2.36-3.43-1.26-4.5 3.75-2 .86-4.61 4.53-1.11 2.41-3.9 4.76 1.41 3.55-2.79 3.66 2.95 4.44-1.28 2.12 3.85 4.75.82.92 4.31 3.84 2.37-1.32 4.53 2.62 3.7z"></path>
  </symbol>
  <symbol id="svg-icon__odnoklassniki" viewBox="0 0 30 30">
    <path
        d="M22 15c-1 0-3 2-7 2s-6-2-7-2a2 2 0 0 0-2 2c0 1 .568 1.481 1 1.734C8.185 19.427 12 21 12 21l-4.25 5.438S7 27.373 7 28a2 2 0 0 0 2 2c1.021 0 1.484-.656 1.484-.656S14.993 23.993 15 24c.007-.007 4.516 5.344 4.516 5.344S19.979 30 21 30a2 2 0 0 0 2-2c0-.627-.75-1.562-.75-1.562L18 21s3.815-1.573 5-2.266c.432-.253 1-.734 1-1.734a2 2 0 0 0-2-2zM15 0a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm0 10.5a3.5 3.5 0 1 1-.001-6.999A3.5 3.5 0 0 1 15 10.5z"></path>
  </symbol>
  <symbol id="svg-icon__payment" viewBox="0 0 27 22">
    <path
        d="M22-.01H4a4 4 0 0 0-4 4v14a4 4 0 0 0 4 4h18a4 4 0 0 0 4-4v-14a4 4 0 0 0-4-4zm-20 2h22v1H2v-1zm22 18H2v-16h22v5h1v6h-1v5z"></path>
    <path
        d="M26 8.28A1.91 1.91 0 0 0 25 8h-8a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-4a2 2 0 0 0-1-1.72zM25 15h-9V9h9v6z"></path>
    <path d="M18 10.99h2v2h-2v-2z"></path>
  </symbol>
  <symbol id="svg-icon__percentage-discount" viewBox="0 0 320.648 320.648">
    <path
        d="M139.219 124.494c12.369-13.416 19.184-31.412 19.184-50.678C158.403 37.134 132.202 0 82.116 0 58.807 0 39.143 8.006 25.247 23.152 12.938 36.57 6.161 54.562 6.161 73.816c0 36.686 26.09 73.818 75.955 73.818 23.396.001 43.146-7.999 57.103-23.14zM82.116 34.322c27.443 0 39.941 20.486 39.941 39.52 0 10.354-3.484 19.939-9.816 26.986-7.064 7.871-17.33 12.033-29.68 12.033-28.137 0-40.955-20.484-40.955-39.516 0-19.421 12.528-39.023 40.51-39.023zm182.158-5.846c-4.539.082-10.736 2.912-13.772 6.287L25.186 285.275c-3.035 3.377-.885 8.111 3.654 8.111h29.49c4.539 0 10.73-2.768 13.76-6.148L296.013 36.777c3.029-3.383 2.828-8.887-4.672-8.885l-27.067.584zm-24.627 147.346c-22.859 0-42.15 7.858-55.783 22.715-12.074 13.158-18.726 30.811-18.726 49.699 0 35.984 25.594 72.412 74.51 72.412 22.957 0 42.326-7.85 56.02-22.701 12.135-13.162 18.818-30.816 18.818-49.711-.001-35.984-25.706-72.414-74.839-72.414zm.442 111.596c-27.375 0-39.848-20.557-39.848-39.648 0-10.397 3.482-20.018 9.809-27.092 7.053-7.894 17.287-12.066 29.598-12.066 27.377 0 39.844 20.553 39.844 39.65 0 10.395-3.483 20.018-9.805 27.092-7.055 7.892-17.29 12.064-29.598 12.064z"></path>
  </symbol>
  <symbol id="svg-icon__phone-big" viewBox="0 0 32 32">
    <path
        d="M23.5 32a7.33 7.33 0 0 1-2.45-.42A33.71 33.71 0 0 1 .34 10.33a7.35 7.35 0 0 1 2.53-8.1L4.5 1a5 5 0 0 1 7.48 1.69l2.67 5.18a3.49 3.49 0 0 1-.53 4l-.55.6a2 2 0 0 0-.3 2.21 9.45 9.45 0 0 0 4.09 4.09 2 2 0 0 0 2.21-.3l.61-.55a3.56 3.56 0 0 1 4-.54l5.18 2.66a5 5 0 0 1 1.28 8l-1.8 1.82A7.4 7.4 0 0 1 23.5 32zM7.5 3a2 2 0 0 0-1.21.41l-1.58 1.2a4.35 4.35 0 0 0-1.5 4.8 30.69 30.69 0 0 0 18.85 19.35 4.44 4.44 0 0 0 4.55-1l1.8-1.82a2 2 0 0 0-.51-3.18L22.72 20a.54.54 0 0 0-.56.08l-.61.56a5 5 0 0 1-5.62.75 12.42 12.42 0 0 1-5.38-5.38 5 5 0 0 1 .75-5.61l.55-.6a.49.49 0 0 0 .08-.56L9.26 4.06A2 2 0 0 0 7.5 3z"></path>
  </symbol>
  <symbol id="svg-icon__phone-small" viewBox="0 0 16 15">
    <path
        d="M15.66 9.57L11.9 7.12a.84.84 0 0 0-1.13.21l-.46.64a.84.84 0 0 1-1.22.15c-.21-.18-1.39-1.07-1.58-1.24a.84.84 0 0 1 .11-1.33.84.84 0 0 0 .32-1l-1.67-4a.84.84 0 0 0-.82-.51h-.82a7.1 7.1 0 0 0-3.51 1.11 3.74 3.74 0 0 0-1.1 2.78c0 1.43.51 4.32 4.29 7.5 2.64 2.21 4.88 3.6 6.36 3.6h.31a6.07 6.07 0 0 0 2.36-.52h.11a4.71 4.71 0 0 0 2.32-4zm-2.95 3a4.39 4.39 0 0 1-1.75.43c-.79 0-2.26-.51-5.38-3.14-4.57-3.83-3.6-6.88-3.24-7.17a4.12 4.12 0 0 1 1.74-.6.83.83 0 0 1 .89.5l.45 1.06a.84.84 0 0 1-.33 1l-.51.32a.84.84 0 0 0-.29 1.13c.82 1.46 4.08 4 5.24 4.8a.83.83 0 0 0 1.17-.19l.56-.77a.84.84 0 0 1 1.14-.21l.86.56a.84.84 0 0 1 .31 1 2.66 2.66 0 0 1-.86 1.28z"></path>
  </symbol>
  <symbol id="svg-icon__plus" viewBox="0 0 14 14">
    <path d="M0 5.99h14v2H0v-2z"></path>
    <path d="M6-.01h2v14H6v-14z"></path>
  </symbol>
  <symbol id="svg-icon__profit-chart" viewBox="0 0 350 350">
    <path d="M40 310V0H0v350h350v-40z"></path>
    <path
        d="M218.623 195.004l52.815-75.579-18.273-12.769 69.369-32.427-6.595 76.293-18.271-12.767-69.674 99.704-74.587-43.341-55.428 71.884-25.34-19.541 72.571-94.116z"></path>
  </symbol>
  <symbol id="svg-icon__refresh" viewBox="0 0 300.000000 300.000000">
    <path class="node"
          d="M198.6 1.9c-.8 1.3-5.2 14.9-11.5 36.1-.9 2.9.1 2.9-17.3 1.1-12.3-1.3-14.9-1.2-26.8.4-24 3.1-43.8 11.4-59.5 24.9-15.7 13.5-26.3 27.2-35.1 45.1-5.1 10.3-6.2 13.5-4.8 13.5.3 0 3.1-2.2 6.2-4.8 30.1-25.6 65.9-38.3 97.5-34.4 9.7 1.2 22.5 4.7 24.5 6.6 1.5 1.4 1.5 1.1-5.4 25.6-5.8 20.8-5.9 21-4.4 21 .6 0 5.3-2 10.3-4.4 11.8-5.6 22.1-10.4 27.2-12.6 2.2-1 7.6-3.4 12-5.5 4.4-2 9.9-4.5 12.3-5.6 2.3-1 6.1-2.8 8.5-3.8 2.3-1.1 9.1-4.2 15.2-6.9 6-2.7 11.4-5.6 11.9-6.5.9-1.4-9.5-17.7-50.9-79.6-6.9-10.3-8.7-12.2-9.9-10.2zm-70.1 163.5c-2.7 1.3-7.5 3.4-10.5 4.9-3 1.4-17 7.8-31 14.2-51.7 23.6-49.6 22.6-49.2 24.5.6 2.6 58.5 89 59.7 89 .7 0 1.7-1.9 2.3-4.3.6-2.3 2-7.4 3.2-11.2 1.2-3.9 3-9.7 4-13 3.5-11.8 3.4-11.6 8.2-10.8 2.4.5 13.3.8 24.3.7 20.9-.1 26.3-.9 42.3-6.8 23.1-8.6 44.9-27.9 59.6-52.9 5.5-9.5 11.1-21.6 10.2-22.4-.2-.2-4 2.4-8.3 5.8-20.1 16-38.1 25.3-58.8 30.4-17.5 4.3-44.1 2.9-57.2-3-3.7-1.7-3.9-2.7-1.8-9.9.8-2.8 2.6-9.4 4-14.6 1.4-5.2 3.3-12.1 4.2-15.3 1-3.5 1.3-6.1.7-6.6-.5-.5-3 0-5.9 1.3z"></path>
  </symbol>
  <symbol id="svg-icon__search" viewBox="0 0 13 13">
    <path
        d="M12.62 12.62a1.22 1.22 0 0 1-1.72 0l-2.15-2.15a5.72 5.72 0 1 1 1.72-1.72l2.15 2.15a1.22 1.22 0 0 1 0 1.72zm-6.93-11a4.06 4.06 0 1 0 4.06 4.06 4.06 4.06 0 0 0-4.06-4.06z"></path>
  </symbol>
  <symbol id="svg-icon__star" viewBox="0 0 13 13">
    <path class="svg-star__field" d="M3.5 7.9L1.2 5.5h3.1l2.2-4.4 2.2 4.4h3.1L9.5 7.9l.8 4-3.8-2.5-3.8 2.5z"></path>
    <path class="svg-star__edge"
          d="M6.5 2.2l1.6 3.2.3.6h2.2L9.3 7.4l-.4.4.1.5.5 2.5-2.4-1.6-.6-.4-.6.4-2.5 1.7.6-2.6.1-.5-.4-.4L2.4 6h2.2l.3-.6 1.6-3.2m0-2.2L4 5H0l3 3.1L2 13l4.5-3 4.5 3-1-4.9L13 5H9L6.5 0z"></path>
  </symbol>
  <symbol id="svg-icon__table" viewBox="0 0 13 13">
    <path
        d="M0 0h3v3H0V0zm5 0h3v3H5V0zm5 0h3v3h-3V0zM0 5h3v3H0V5zm5 0h3v3H5V5zm5 0h3v3h-3V5zM0 10h3v3H0v-3zm5 0h3v3H5v-3zm5 0h3v3h-3v-3z"></path>
  </symbol>
  <symbol id="svg-icon__tooltip" viewBox="0 0 14 14">
    <path
        d="M7.07 0a7.06 7.06 0 1 0 7 7.06 7.07 7.07 0 0 0-7-7.06zm1.68 10.78a5.84 5.84 0 0 1-.75.18 2.26 2.26 0 0 1-.77.12 1.54 1.54 0 0 1-1-.33 1.16 1.16 0 0 1-.46-.84 2.8 2.8 0 0 1 0-.4c0-.13.05-.51.09-.68l.64-1.51c0-.15.08-.3.11-.44a1.57 1.57 0 0 0 0-.28.61.61 0 0 0-.22-.43 1.45 1.45 0 0 0-.7-.13 1.24 1.24 0 0 0-.37.06L5 6.21v-.62c.31-.13.89-.3 1.16-.39a2.9 2.9 0 0 1 .79-.13 1.51 1.51 0 0 1 1 .32 1.46 1.46 0 0 1 .55.91v.38a3.3 3.3 0 0 1-.09.49l-.64 1.5a3.72 3.72 0 0 0-.11.45 5 5 0 0 0 0 .6.55.55 0 0 0 .15.45.56.56 0 0 0 .43.2.93.93 0 0 0 .63-.09zm0-6.92a1 1 0 0 1-.67.29 1 1 0 0 1-.66-.29.87.87 0 0 1 0-1.28.91.91 0 0 1 .66-.28.93.93 0 0 1 .67.26.91.91 0 0 1 .27.66.87.87 0 0 1-.32.64z"></path>
  </symbol>
  <symbol id="svg-icon__twitter" viewBox="0 0 56.693 56.693">
    <path
        d="M52.837 15.065a20.11 20.11 0 0 1-5.805 1.591 10.125 10.125 0 0 0 4.444-5.592 20.232 20.232 0 0 1-6.418 2.454 10.093 10.093 0 0 0-7.377-3.192c-5.581 0-10.106 4.525-10.106 10.107 0 .791.089 1.562.262 2.303-8.4-.422-15.848-4.445-20.833-10.56a10.055 10.055 0 0 0-1.368 5.082c0 3.506 1.784 6.6 4.496 8.412a10.078 10.078 0 0 1-4.578-1.265l-.001.128c0 4.896 3.484 8.98 8.108 9.91a10.162 10.162 0 0 1-4.565.172c1.287 4.015 5.019 6.938 9.441 7.019a20.276 20.276 0 0 1-12.552 4.327c-.815 0-1.62-.048-2.411-.142a28.6 28.6 0 0 0 15.493 4.541c18.591 0 28.756-15.4 28.756-28.756 0-.438-.009-.875-.028-1.309a20.47 20.47 0 0 0 5.042-5.23z"></path>
  </symbol>
  <symbol id="svg-icon__user" viewBox="0 0 16 16">
    <path
        d="M15 16H1a1 1 0 0 1-1-1v-1h.1a6 6 0 0 1 4.55-4.83A4 4 0 0 1 4 7V4a4 4 0 1 1 8 0v3a4 4 0 0 1-.65 2.17A6 6 0 0 1 15.9 14h.1v1a1 1 0 0 1-1 1zM10 4a2 2 0 0 0-4 0v3a2 2 0 0 0 4 0V4zm0 7H6a4 4 0 0 0-3.86 3h11.72A4 4 0 0 0 10 11z"></path>
  </symbol>
  <symbol id="svg-icon__vk-logo" viewBox="0 0 304.36 304.36">
    <path
        d="M261.945 175.576c10.096 9.857 20.752 19.131 29.807 29.982 4 4.822 7.787 9.798 10.684 15.394 4.105 7.955.387 16.709-6.746 17.184l-44.34-.02c-11.436.949-20.559-3.655-28.23-11.474-6.139-6.253-11.824-12.908-17.727-19.372-2.42-2.642-4.953-5.128-7.979-7.093-6.053-3.929-11.307-2.726-14.766 3.587-3.523 6.421-4.322 13.531-4.668 20.687-.475 10.441-3.631 13.186-14.119 13.664-22.414 1.057-43.686-2.334-63.447-13.641-17.422-9.968-30.932-24.04-42.691-39.971-22.895-31.021-40.428-65.108-56.186-100.15C-2.01 76.458.584 72.22 9.295 72.07c14.465-.281 28.928-.261 43.41-.02 5.879.086 9.771 3.458 12.041 9.012 7.826 19.243 17.402 37.551 29.422 54.521 3.201 4.518 6.465 9.036 11.113 12.216 5.142 3.521 9.057 2.354 11.476-3.374 1.535-3.632 2.207-7.544 2.553-11.434 1.146-13.383 1.297-26.743-.713-40.079-1.234-8.323-5.922-13.711-14.227-15.286-4.238-.803-3.607-2.38-1.555-4.799 3.564-4.172 6.916-6.769 13.598-6.769h50.111c7.889 1.557 9.641 5.101 10.721 13.039l.043 55.663c-.086 3.073 1.535 12.192 7.07 14.226 4.43 1.448 7.35-2.096 10.008-4.905 11.998-12.734 20.561-27.783 28.211-43.366 3.395-6.852 6.314-13.968 9.143-21.078 2.096-5.276 5.385-7.872 11.328-7.757l48.229.043c1.43 0 2.877.021 4.262.258 8.127 1.385 10.354 4.881 7.844 12.817-3.955 12.451-11.65 22.827-19.174 33.251-8.043 11.129-16.645 21.877-24.621 33.072-7.328 10.223-6.746 15.376 2.357 24.255zm0 0"
        fill-rule="evenodd" clip-rule="evenodd"></path>
  </symbol>
  <symbol id="svg-icon__vkontakte" viewBox="0 0 30 30">
    <path clip-rule="evenodd"
          d="M16 24c1 0 1-1.441 1-2 0-1 1-2 2-2s2.715 1.715 4 3c1 1 1 1 2 1h3s2-.076 2-2c0-.625-.685-1.685-3-4-2-2-3.026-.967 0-5 1.843-2.456 3.184-4.681 2.954-5.323C29.734 7.064 24.608 6.088 24 7c-2 3-2.367 3.735-3 5-1 2-1.099 3-2 3-.909 0-1-1.941-1-3 0-3.306.479-5.644-1-6h-3c-1.61 0-3 1-3 1s-1.241.968-1 1c.298.04 2-.414 2 1v2s.009 4-1 4c-1 0-3-4-5-7-.785-1.177-1-1-2-1-1.072 0-1.999.042-3 .042-1 0-1.128.637-1 .958 2 5 3.437 8.14 7.237 12.096C10.722 23.725 13.05 23.918 15 24c.5.021 0 0 1 0z"
          fill-rule="evenodd"></path>
  </symbol>
  <symbol id="svg-icon__yandex-logo" viewBox="0 0 320 320">
    <path
        d="M227.184 0h-45.466c-46.063 0-92.541 34.014-92.541 110.004 0 39.361 16.683 70.017 47.263 87.451L80.468 298.762c-2.653 4.791-2.722 10.221-.185 14.525C82.76 317.49 87.288 320 92.395 320h28.311c6.432 0 11.448-3.109 13.852-8.555L187.037 208.8h3.83v98.407c0 6.935 5.852 12.793 12.778 12.793h24.735c7.767 0 13.191-5.424 13.191-13.19V14.002C241.572 5.758 235.656 0 227.184 0zm-36.316 163.204h-6.756c-26.197 0-41.837-21.384-41.837-57.202 0-44.537 19.757-60.405 38.247-60.405h10.346v117.607z"></path>
  </symbol>
  <symbol id="svg-icon__zoom" viewBox="0 0 24 24">
    <path
        d="M9 9V6h1v3h3v1h-3v3H9v-3H6V9h3zm7.477 5.356a8.5 8.5 0 1 0-2.122 2.122l6.304 6.303c.117.117.303.12.423 0l1.7-1.699a.304.304 0 0 0-.001-.423l-6.304-6.303zM9.5 16a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13z"
        fill-rule="evenodd"></path>
  </symbol>
</svg>
<!-- Mobile slide frame -->
<div class="page__mobile" data-page-pushy-mobile>
  <nav class="mobile-nav" data-mobile-nav>
    <ul class="mobile-nav__list" data-mobile-nav-list>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika"
           data-mobile-nav-link>
          Электроника <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg class="svg-icon"><use
                    xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
        <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
              Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
            </button>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link mobile-nav__link--view-all"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika">
              Смотреть все </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/kompiutery"
               data-mobile-nav-link>
              Компьютеры <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
            <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
                  Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                          class="svg-icon"><use
                            xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
                </button>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link mobile-nav__link--view-all"
                   href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/kompiutery">
                  Смотреть все </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link"
                   href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/kompiutery/noutbuki">
                  Ноутбуки </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link"
                   href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/kompiutery/planshetnye-kompiutery">
                  Планшетные компьютеры </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link"
                   href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/kompiutery/pk-monobloki">
                  ПК моноблоки </a>
              </li>
            </ul>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/hranenie-dannyh">
              Хранение данных </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/noutbuki2">
              Ноутбуки </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/planshety">
              Планшеты </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link"
               href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika/audio">
              Аудио </a>
          </li>
        </ul>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/category/mebel">
          Мебель </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link"
           href="http://unishopvertical.imagecmsdemo.net/shop/category/sportivnye-tovary">
          Спортивные товары </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/category/dom-i-sad">
          Дом и сад </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/category/detskie-tovary">
          Детские товары </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/category/odezhda">
          Одежда </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link"
           href="http://unishopvertical.imagecmsdemo.net/shop/category/telefonija-mr3-pleery-gps">
          Телефония, МР3-плееры, GPS </a>
      </li>
      <li class="mobile-nav__item mobile-nav__item--separator">Магазин</li>

      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/o-kompanii"
           data-mobile-nav-link target="_self">
          О компании <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg class="svg-icon"><use
                    xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
        <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
              Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
            </button>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link mobile-nav__link--view-all"
               href="http://unishopvertical.imagecmsdemo.net">
              Смотреть все </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/blog"
               data-mobile-nav-link target="_self">
              Блог <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
            <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
                  Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                          class="svg-icon"><use
                            xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
                </button>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link mobile-nav__link--view-all"
                   href="http://unishopvertical.imagecmsdemo.net/blog">
                  Смотреть все </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/blog/biznes"
                   target="_self">
                  Бизнес </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/blog/finansy"
                   target="_self">
                  Финансы </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link"
                   href="http://unishopvertical.imagecmsdemo.net/blog/ekonomika" target="_self">
                  Экономика </a>
              </li>
            </ul>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/dostavka-i-oplata"
               target="_self">
              Доставка и оплата </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/klienty-o-nas"
               target="_self">
              Клиенты о нас </a>
          </li>
        </ul>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/gallery" target="_self">
          Галерея </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/brand" target="_self">Доставка
          и оплата </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/kontakty" target="_self">
          Контакты </a>
      </li>
      <li class="mobile-nav__item mobile-nav__item--separator">Пользователь</li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="/user/login">Вход</a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <?= empty(Yii::$app->user->id) ? Html::a('Регистрация', '/user/register', ['class' => 'mobile-nav__link', 'rel' => "nofollow"]) : '' ?>
      </li>

      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/cart">Корзина</a>
      </li>


      <li class="mobile-nav__item mobile-nav__item--separator">Языки</li>
      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="/ru">Русский</a>
      </li>
      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="/en">English</a>
      </li>
      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="/ua">Українська</a>
      </li>
    </ul>
  </nav>
</div>

<!-- Site background overlay when mobile menu is open -->
<div class="page__overlay hidden" data-page-pushy-overlay></div>

<!-- Main content frame -->
<div class="page__body" data-page-pushy-container>
  <div class="page__wrapper">

    <header class="page__hgroup">
      <!-- Header -->
      <!-- Top Headline -->
      <div class="page__headline hidden-xs hidden-sm">
        <div class="page__container">

          <div class="row row--ib row--ib-mid">
            <div class="col-md-6">
              <div class="page__top-menu">
                <nav class="list-nav">
                  <ul class="list-nav__items">

                    <li class="list-nav__item" data-global-doubletap>
                      <a class="list-nav__link"
                         href="http://unishopvertical.imagecmsdemo.net/o-kompanii" target="_self">О
                        компании <i class="list-nav__arrow list-nav__arrow--down">
                          <svg class="svg-icon">
                            <use xlink:href="#svg-icon__arrow-down"></use>
                          </svg>
                        </i>
                      </a>
                      <nav class="list-nav__drop">
                        <ul class="overlay">
                          <li class="overlay__item" data-global-doubletap>
                            <a class="overlay__link"
                               href="http://unishopvertical.imagecmsdemo.net/blog"
                               target="_self">Блог <i
                                  class="overlay__arrow overlay__arrow--right">
                                <svg class="svg-icon">
                                  <use xlink:href="#svg-icon__arrow-right"></use>
                                </svg>
                              </i>
                            </a>
                            <nav class="overlay__drop">
                              <ul class="overlay">
                                <li class="overlay__item">
                                  <a class="overlay__link"
                                     href="http://unishopvertical.imagecmsdemo.net/blog/biznes"
                                     target="_self">Бизнес </a>
                                </li>
                                <li class="overlay__item">
                                  <a class="overlay__link"
                                     href="http://unishopvertical.imagecmsdemo.net/blog/finansy"
                                     target="_self">Финансы </a>
                                </li>
                                <li class="overlay__item">
                                  <a class="overlay__link"
                                     href="http://unishopvertical.imagecmsdemo.net/blog/ekonomika"
                                     target="_self">Экономика </a>
                                </li>
                              </ul>
                            </nav>
                          </li>
                          <li class="overlay__item">
                            <a class="overlay__link"
                               href="http://unishopvertical.imagecmsdemo.net/klienty-o-nas"
                               target="_self">Клиенты о нас </a>
                          </li>
                        </ul>
                      </nav>
                    </li>
                    <li class="list-nav__item">
                      <a class="list-nav__link"
                         href="http://unishopvertical.imagecmsdemo.net/gallery" target="_self">Галерея </a>
                    </li>
                    <li class="list-nav__item">
                      <a class="list-nav__link"
                         href="http://unishopvertical.imagecmsdemo.net/shop/brand" target="_self">Доставка
                        и оплата</a>
                    </li>
                    <li class="list-nav__item">
                      <a class="list-nav__link"
                         href="http://unishopvertical.imagecmsdemo.net/kontakty" target="_self">Контакты </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-md-6 clearfix">
              <div class="page__user-bar">
                <div class="user-panel">

                  <!-- User wishlist items -->
                  <div class="user-panel__item" data-ajax-inject="wishlist-total">

                    <a class="user-panel__link user-panel__link--empty"
                       href="http://unishopvertical.imagecmsdemo.net/wishlist" rel="nofollow">
                      <i class="user-panel__ico user-panel__ico--wishlist">
                        <svg class="svg-icon">
                          <use xlink:href="#svg-icon__heart"></use>
                        </svg>
                      </i>
                      Избранные (0)
                    </a></div>

                  <!-- User profile and auth menu -->
                  <div class="user-panel__item">
  <span class="user-panel__link">
    <i class="user-panel__ico user-panel__ico--profile">
      <svg class="svg-icon"><use xlink:href="#svg-icon__user"></use></svg>
    </i>
    Личный кабинет    <i class="user-panel__arrow user-panel__arrow--down">
      <svg class="svg-icon"><use xlink:href="#svg-icon__arrow-down"></use></svg>
    </i>
  </span>
                    <div class="user-panel__drop user-panel__drop--rtl">
                      <div class="overlay">

                        <!-- User auto menu. Visible when user is not authorized -->
                        <div class="overlay__item">
                          <?= (empty(Yii::$app->user->id))
                              ? Html::a('Вход', '/user/login', ['class' => 'overlay__link', 'rel' => 'nofollow'])
                              : Html::a('Выход', '/user/logout', ['class' => 'overlay__link', 'rel' => 'nofollow', 'data-method' => 'post',]) ?>
                        </div>
                        <div class="overlay__item">
                          <?= empty(Yii::$app->user->id) ? Html::a('Регистрация', '/user/register', ['class' => 'overlay__link', 'rel' => "nofollow"]) : '' ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="user-panel__item">
                    <div class="user-panel__link">
                      <span class="user-panel__ico"><i class="ico-flag ico-flag--ru"></i></span>
                      <i class="user-panel__arrow user-panel__arrow--down">
                        <svg class="svg-icon">
                          <use xlink:href="#svg-icon__arrow-down"></use>
                        </svg>
                      </i>
                    </div>
                    <div class="user-panel__drop user-panel__drop--rtl">
                      <ul class="overlay">
                        <li class="overlay__item">
                          <a class="overlay__link" href="/ru">
                            <i class="overlay__icon">
                              <i class="ico-flag ico-flag--ru"></i>
                            </i>
                            Русский </a>
                        </li>
                        <li class="overlay__item">
                          <a class="overlay__link" href="/en">
                            <i class="overlay__icon">
                              <i class="ico-flag ico-flag--en"></i>
                            </i>
                            English </a>
                        </li>
                        <li class="overlay__item">
                          <a class="overlay__link" href="/ua">
                            <i class="overlay__icon">
                              <i class="ico-flag ico-flag--ua"></i>
                            </i>
                            Українська </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <!-- Main Header -->
      <div class="page__header">
        <div class="page__container">

          <div class="row row--ib row--ib-mid">
            <!-- Hamburger menu -->
            <!-- Hamburger menu -->
            <div class="col-xs-3 visible-xs-inline-block visible-sm-inline-block">
              <button class="btn-mobile-icon" data-page-mobile-btn>
                <svg class="svg-icon">
                  <use xlink:href="#svg-icon__hamburger"></use>
                </svg>
              </button>
              <button class="btn-mobile-icon hidden" data-page-mobile-btn>
                <svg class="svg-icon">
                  <use xlink:href="#svg-icon__close-bold"></use>
                </svg>
              </button>
            </div>
            <!-- Logo -->
            <div class="col-xs-6 col-md-3 col-lg-2 col--align-center col--align-left-md">
              <img src="/uploads/images/logo.png" alt="unishopvertical">
            </div>
            <!-- Phones and call-back -->
            <div class="col-md-3 col-lg-2 col-md-push-5 col-lg-push-4 hidden-xs hidden-sm">
              <div class="site-info">
                <div class="site-info__aside hidden-xs">
                  <div class="site-info__ico site-info__ico--phone-big">
                    <svg class="svg-icon">
                      <use xlink:href="#svg-icon__phone-big"></use>
                    </svg>
                  </div>
                </div>
                <div class="site-info__inner">
                  <div class="site-info__title">0 800 567-43-21</div>
                  <div class="site-info__desc">
                    <a class="site-info__link"
                       href="http://unishopvertical.imagecmsdemo.net/callbacks"
                       data-modal="callbacks_modal"
                       rel="nofollow"
                    >
                      Обратный звонок </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Schedule -->
            <div class="col-lg-2 col-lg-push-4 hidden-xs hidden-sm hidden-md">
              <div class="site-info">
                <div class="site-info__aside hidden-xs">
                  <div class="site-info__ico site-info__ico--clock-big">
                    <svg class="svg-icon">
                      <use xlink:href="#svg-icon__clock-big"></use>
                    </svg>
                  </div>
                </div>
                <div class="site-info__inner">
                  <div class="site-info__desc">
                    Пн–Сб 09:00–20:00, Вс 09:00–17:00
                  </div>
                </div>
              </div>
            </div>
            <!-- Cart -->
            <div class="col-xs-3 col-md-1 col-lg-2 col-md-push-5 col-lg-push-4 clearfix">
              <div class="pull-right" data-ajax-inject="cart-header">
                <div class="cart-header">
                  <div class="cart-header__aside">
                    <a class="cart-header__ico  cart-header__ico--empty "
                       href="http://unishopvertical.imagecmsdemo.net/shop/cart"
                       data-modal="includes/cart/cart_modal">
                      <svg class="svg-icon">
                        <use xlink:href="#svg-icon__cart"></use>
                      </svg>
                      <span class="cart-header__badge hidden-lg">0</span>
                    </a>
                  </div>
                  <div class="cart-header__inner visible-lg">
                    <div class="cart-header__title">
                      <a class="cart-header__link  cart-header__link--empty "
                         href="http://unishopvertical.imagecmsdemo.net/shop/cart"
                         data-modal="includes/cart/cart_modal">Корзина</a>
                    </div>
                    <div class="cart-header__desc">
                      Пуста
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Search -->
            <div class="col-xs-12 col-md-5 col-lg-4 col-md-pull-4 col-lg-pull-6 col--spacer-sm">
              <div class="autocomplete"
                   data-autocomplete="header-search"
                   data-autocomplete-url="http://unishopvertical.imagecmsdemo.net/shop/search/ac"
              >

                <!-- Autocomplet Input Element BEGIN -->
                <div class="autocomplete__element">
                  <form action="http://unishopvertical.imagecmsdemo.net/shop/search" method="GET">
                    <div class="input-group">
                      <input class="form-control"
                             data-autocomplete-input
                             type="text"
                             name="text"
                             autocomplete="off"
                             placeholder="Поиск товаров"
                             value=""
                             required
                      >
                      <span class="input-group-btn">
				<button class="btn btn-default" type="submit">
                  <i class="btn-default__ico btn-default__ico--search">
                    <svg class="svg-icon"><use xlink:href="#svg-icon__search"></use></svg>
                  </i>
                </button>
			</span>
                    </div>
                  </form>
                </div>
                <!-- END Autocomplet Input Element -->


                <!-- Autocomplet Overlay Frame BEGIN -->
                <div class="autocomplete__frame hidden" data-autocomplete-frame>
                  <a class="autocomplete__item hidden" href="#" data-autocomplete-product="0">
                    <div class="autocomplete__product">
                      <!-- Photo  -->
                      <div class="autocomplete__product-photo">
                        <div class="product-photo">
              <span class="product-photo__item product-photo__item--xs">
                <img class="product-photo__img"
                     src="http://unishopvertical.imagecmsdemo.net/uploads/shop/nophoto/nophoto.jpg"
                     alt="No photo" data-autocomplete-product-img>
              </span>
                        </div>
                      </div>

                      <div class="autocomplete__product-info">
                        <!-- Title -->
                        <div class="autocomplete__product-title"
                             data-autocomplete-product-name></div>
                        <!-- Price -->
                        <div class="autocomplete__product-price">
                          <div class="product-price product-price--sm">
                            <div class="product-price__item">
                              <div class="product-price__old"
                                   data-autocomplete-product-old-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__main"
                                   data-autocomplete-product-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__addition">
                                <div class="product-price__addition-item"
                                     data-autocomplete-product-addition-price></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                  <a class="autocomplete__item hidden" href="#" data-autocomplete-product="1">
                    <div class="autocomplete__product">
                      <!-- Photo  -->
                      <div class="autocomplete__product-photo">
                        <div class="product-photo">
              <span class="product-photo__item product-photo__item--xs">
                <img class="product-photo__img"
                     src="http://unishopvertical.imagecmsdemo.net/uploads/shop/nophoto/nophoto.jpg"
                     alt="No photo" data-autocomplete-product-img>
              </span>
                        </div>
                      </div>

                      <div class="autocomplete__product-info">
                        <!-- Title -->
                        <div class="autocomplete__product-title"
                             data-autocomplete-product-name></div>
                        <!-- Price -->
                        <div class="autocomplete__product-price">
                          <div class="product-price product-price--sm">
                            <div class="product-price__item">
                              <div class="product-price__old"
                                   data-autocomplete-product-old-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__main"
                                   data-autocomplete-product-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__addition">
                                <div class="product-price__addition-item"
                                     data-autocomplete-product-addition-price></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                  <a class="autocomplete__item hidden" href="#" data-autocomplete-product="2">
                    <div class="autocomplete__product">
                      <!-- Photo  -->
                      <div class="autocomplete__product-photo">
                        <div class="product-photo">
              <span class="product-photo__item product-photo__item--xs">
                <img class="product-photo__img"
                     src="http://unishopvertical.imagecmsdemo.net/uploads/shop/nophoto/nophoto.jpg"
                     alt="No photo" data-autocomplete-product-img>
              </span>
                        </div>
                      </div>

                      <div class="autocomplete__product-info">
                        <!-- Title -->
                        <div class="autocomplete__product-title"
                             data-autocomplete-product-name></div>
                        <!-- Price -->
                        <div class="autocomplete__product-price">
                          <div class="product-price product-price--sm">
                            <div class="product-price__item">
                              <div class="product-price__old"
                                   data-autocomplete-product-old-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__main"
                                   data-autocomplete-product-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__addition">
                                <div class="product-price__addition-item"
                                     data-autocomplete-product-addition-price></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                  <a class="autocomplete__item hidden" href="#" data-autocomplete-product="3">
                    <div class="autocomplete__product">
                      <!-- Photo  -->
                      <div class="autocomplete__product-photo">
                        <div class="product-photo">
              <span class="product-photo__item product-photo__item--xs">
                <img class="product-photo__img"
                     src="http://unishopvertical.imagecmsdemo.net/uploads/shop/nophoto/nophoto.jpg"
                     alt="No photo" data-autocomplete-product-img>
              </span>
                        </div>
                      </div>

                      <div class="autocomplete__product-info">
                        <!-- Title -->
                        <div class="autocomplete__product-title"
                             data-autocomplete-product-name></div>
                        <!-- Price -->
                        <div class="autocomplete__product-price">
                          <div class="product-price product-price--sm">
                            <div class="product-price__item">
                              <div class="product-price__old"
                                   data-autocomplete-product-old-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__main"
                                   data-autocomplete-product-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__addition">
                                <div class="product-price__addition-item"
                                     data-autocomplete-product-addition-price></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>
                  <a class="autocomplete__item hidden" href="#" data-autocomplete-product="4">
                    <div class="autocomplete__product">
                      <!-- Photo  -->
                      <div class="autocomplete__product-photo">
                        <div class="product-photo">
              <span class="product-photo__item product-photo__item--xs">
                <img class="product-photo__img"
                     src="http://unishopvertical.imagecmsdemo.net/uploads/shop/nophoto/nophoto.jpg"
                     alt="No photo" data-autocomplete-product-img>
              </span>
                        </div>
                      </div>

                      <div class="autocomplete__product-info">
                        <!-- Title -->
                        <div class="autocomplete__product-title"
                             data-autocomplete-product-name></div>
                        <!-- Price -->
                        <div class="autocomplete__product-price">
                          <div class="product-price product-price--sm">
                            <div class="product-price__item">
                              <div class="product-price__old"
                                   data-autocomplete-product-old-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__main"
                                   data-autocomplete-product-price></div>
                            </div>
                            <div class="product-price__item">
                              <div class="product-price__addition">
                                <div class="product-price__addition-item"
                                     data-autocomplete-product-addition-price></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </a>

                  <!-- Message if no items found after search request -->
                  <div class="autocomplete__message autocomplete__message--noitems hidden"
                       data-autocomplete-noitems>
                    К сожалению, по вашему запросу ничего не найдено. Пожалуйста, убедитесь, что
                    запрос введен корректно или переформулируйте его.
                  </div>

                  <!-- Message if no items found after search request -->
                  <div class="autocomplete__message autocomplete__message--noitems hidden"
                       data-autocomplete-tooshort>
                    Пожалуйста, введите более двух символов
                  </div>

                  <!-- Link to search page if number of results are more than 5 -->
                  <div class="autocomplete__readmore hidden">
                    <a href="http://unishopvertical.imagecmsdemo.net/shop/search?text=">Все
                      результаты поиска</a>
                  </div>

                </div>
                <!-- END Autocomplet Overlay Frame -->

              </div><!-- /.autocomplete -->      </div>
          </div>

        </div>
      </div>
    </header>

    <!-- Bread Crumbs -->

    <div class="page__content">
      <div class="row">

        <div class="col-md-2">
          <!-- Main Navigation -->
          <?=app\widgets\menu\LeftMenu::widget()?>

        </div>

        <div class="col-md-10 col-sm-12">
          <div class="start-page">
            <?= $content ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Viewed products widget. Hidden on order page -->

</div><!-- .page__wrapper -->

<!-- Footer -->
<footer class="page__fgroup">
  <div class="page__container">
    <div class="page__seo-text">
      <div class="typo typo--seo"><h1>Интернет-магазин</h1>
        <p>Интернет-магазин &mdash; сайт, торгующий товарами в интернете. Позволяет пользователям сформировать
          заказ на покупку, выбрать способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары
          или услуги, пользователь обычно имеет возможность тут же на сайте выбрать метод оплаты и
          доставки.</p>
        <p>Своим рождением первые системы и методы электронной коммерции обязаны появлению технологий
          автоматизации продаж и внедрению автоматизированных систем управления корпоративными ресурсами. В
          1960 году американские компании American Airlines и IBM приступают к созданию системы автоматизации
          процедуры резервирования мест на авиарейсы. Таким образом, система SABRE (Semi-Automatic Business
          Research Environment) делает воздушные перелёты более доступными для рядовых пассажиров, помогая им
          ориентироваться в тарифах и рейсах, число которых постоянно растет. За счёт автоматизации процесса
          расчёта тарифов при резервировании мест снижается стоимость услуг. Это являет собой самый первый
          опыт создания системы электронной коммерции.</p>
        <p>Наиболее динамично рынок электронной коммерции развивается в течение последних 20 лет, что
          обусловлено стремительным ростом количества интернет-пользователей, увеличением влияния социальных
          сетей и других интерактивных онлайн-платформ, динамичным развитием систем электронных платежей и
          переходом ведущих игроков рынка к новым технологическим платформам для электронной коммерции (от Web
          1.0 к Web 2.0, далее к Web 3.0).</p></div>
    </div>
  </div>

  <div class="page__footer">
    <div class="page__container">
      <div class="footer">
        <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="footer__title">Каталог</div>
            <div class="footer__inner">
              <ul class="footer__items">
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/elektronika">Электроника</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/mebel">Мебель</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/sportivnye-tovary">Спортивные
                    товары</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/dom-i-sad">Дом и
                    сад</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/detskie-tovary">Детские
                    товары</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/odezhda">Одежда</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/shop/category/telefonija-mr3-pleery-gps">Телефония,
                    МР3-плееры, GPS</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="footer__title">Магазин</div>
            <div class="footer__inner">
              <ul class="footer__items">

                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/o-kompanii"
                     target="_self">О компании</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="http://unishopvertical.imagecmsdemo.net/dostavka-i-oplata" target="_self">Доставка
                    и оплата</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/klienty-o-nas"
                     target="_self">Клиенты о нас</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/blog"
                     target="_self">Блог</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/gallery"
                     target="_self">Галерея</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/shop/brand"
                     target="_self">Бренды</a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/kontakty"
                     target="_self">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="clearfix visible-xs"></div>
          <div class="col-xs-6 col-sm-3 col--spacer-xs">
            <div class="footer__title">Пользователь</div>
            <div class="footer__inner">
              <ul class="footer__items">
                <li class="footer__item">
                  <a class="footer__link" href="/user/login" rel="nofollow">Вход</a>
                </li>
                <li class="footer__item">
                  <?= empty(Yii::$app->user->id) ? Html::a('Регистрация', '/user/register', ['class' => 'footer__link', 'rel' => "nofollow"]) : '' ?>
                </li>

                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/callbacks"
                     data-modal="callbacks_modal"
                     rel="nofollow">Обратный звонок</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col--spacer-xs">
            <div class="footer__title">Контакты</div>
            <div class="footer__inner">
              <ul class="footer__items">
                <li class="footer__item">ул. Набережная 22а</li>
                <li class="footer__item">0 800 567-43-21</li>
                <li class="footer__item">info@fullmarket.com</li>
                <li class="footer__item">
                  <a class="footer__link" href="http://unishopvertical.imagecmsdemo.net/feedback"
                     data-modal="feedback_modal"
                     rel="nofollow"
                  >Обратная связь</a>
                </li>
              </ul>
            </div>
            <div class="footer__inner">
              <div class="soc-groups">


                <a class="soc-groups__ico soc-groups__ico--vkontakte" href="#" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__vkontakte"></use>
                  </svg>
                </a>
                <a class="soc-groups__ico soc-groups__ico--facebook" href="#" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__facebook"></use>
                  </svg>
                </a>
                <a class="soc-groups__ico soc-groups__ico--google-plus" href="#" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__google-plus"></use>
                  </svg>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page__basement">
    <div class="page__container">
      <div class="basement">
        <div class="row row--ib row--ib-mid">
          <div class="col-xs-12 col-sm-6 col--align-left-sm col--spacer-xs">© 2015-2016, Интернет-магазин. Все
            права защищены.
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>

</div><!-- .page__body -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
