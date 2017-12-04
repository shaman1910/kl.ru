<?php

namespace app\modules\admin\controllers;

use app\models\Email;
use Yii;
use app\models\Department;
use app\models\SearchDepartment;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartmentController implements the CRUD actions for Department model.
 */
class DepartmentController extends Controller
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
     * Lists all Department models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchDepartment();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Department model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Department model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Department();
        $email = new Email();
        if ($model->load(Yii::$app->request->post()) && $email->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            $isValid = $email->validate() && $isValid;
            if ($isValid) {
                $model->save(false);
                $email->save(false);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        else {
            return $this->render('create', [
                'model' => $model,
                'email' => $email,
            ]);
        }
    }

    /**
     * Updates an existing Department model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $email_client = Email::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $email_client->load(Yii::$app->request->post())) {
            $isValid = $model->validate();
            $isValid = $email_client->validate() && $isValid;
                       if ($isValid) {
                $model->save(false);
                $email_client->save(false);


                return $this->redirect(['view', 'id' => $id]);
            }
        }
        else {
            return $this->render('update', [
                'model' => $model,
                'email_client' => $email_client,
            ]);
        }
    }

    /**
     * Deletes an existing Department model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Department model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Department the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Department::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
