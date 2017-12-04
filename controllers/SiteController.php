<?php

namespace app\controllers;

use app\models\Department;
use app\models\Email;
use app\models\Profile;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm as Login;
use app\models\Signup;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionSignup()
    {
        $model = new Signup();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if ($user = $model->signup()) {
                return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionOffice()
    {

        $departments = Department::find()->where(['salon_or_office'=> 'office'])->all();
        return $this->render('office', [
            'departments'=>$departments,
        ]);
    }

    public function actionOfficeView($id)
    {
        $departments = Department::find()->where(['salon_or_office'=> 'office'])->all();
        $chiefs = Profile::find()->where(['department_id'=>$id, 'chief' => 1, 'status' => 1])->all();
        $profiles = Profile::find()->where(['department_id'=>$id, 'chief' => 0, 'status' => 1])->all();
        return $this->render('officeview', [
            'profiles'=>$profiles,
            'departments'=>$departments,
            'chiefs'=>$chiefs,
        ]);
    }


    public function actionSalon()
    {
        $departments = Department::find()->where(['salon_or_office'=> 'salon'])->all();
        return $this->render('salon', [
            'departments'=>$departments,
        ]);
    }

    public function actionSalonView($id)
    {

        $departments = Department::find()->where(['salon_or_office'=> 'salon'])->all();
        $chiefs = Profile::find()->where(['department_id'=>$id, 'chief' => 1, 'status' => 1])->all();
        $profiles = Profile::find()->where(['department_id'=>$id, 'chief' => 0, 'status' => 1])->all();



        return $this->render('salonview', [
            'profiles'=>$profiles,
            'departments'=>$departments,
            'chiefs'=>$chiefs,
        ]);
    }

    public function actionSearch($q)
    {


        $departments = Department::find()->all();
        $query = Profile::find()
            ->where(['like', 'surname', $q])
            ->orWhere(['like', 'name', $q])
            ->all();


        return $this->render('search', [
            'query'=>$query,
            'q'=>$q,
            'departments'=>$departments,

        ]);

    }


    public function actionMailDelivery()
    {
        return '123';
    }



}
