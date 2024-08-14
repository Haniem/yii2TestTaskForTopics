<?php

namespace app\controllers;

use app\models\Subtopic;
use app\models\SubtopicSearch;
use app\models\Topic;
use app\models\Topiccontext;
use app\models\TopiccontextSearch;
use app\models\TopicSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TopicController implements the CRUD actions for Topic model.
 */
class HomeController extends Controller
{
    /**
     * @inheritDoc
     */
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     'delete' => ['POST'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }

    /**
     * Lists all Topic models.
     *
     * @return string
     */
    public function actionTopics()
    {
        $searchModel = new TopicSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);        

        if($dataProvider === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('topics', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSubtopics($id)
    {
        $model = Subtopic::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $searchModel = new SubtopicSearch();
        $searchModel->topic_id = $id; 

        $dataProvider = $searchModel->search([]);

        if($dataProvider === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('subtopics', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'topic_id' => $id
        ]);
    }

    public function actionTopicsContext($id, $topic_id)
    {

        $searchModel = new TopiccontextSearch();
        $searchModel->subtopic_id = $id; 

        $dataProvider = $searchModel->search([]);

        if($dataProvider === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('topicContext', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id' => $id,
            'topic_id' => $topic_id
        ]);
    }

    // /**
    //  * Displays a single Topic model.
    //  * @param int $id ID
    //  * @return string
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }

    // /**
    //  * Creates a new Topic model.
    //  * If creation is successful, the browser will be redirected to the 'view' page.
    //  * @return string|\yii\web\Response
    //  */
    // public function actionCreate()
    // {
    //     $model = new Topic();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id' => $model->id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Updates an existing Topic model.
    //  * If update is successful, the browser will be redirected to the 'view' page.
    //  * @param int $id ID
    //  * @return string|\yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Deletes an existing Topic model.
    //  * If deletion is successful, the browser will be redirected to the 'index' page.
    //  * @param int $id ID
    //  * @return \yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    // /**
    //  * Finds the Topic model based on its primary key value.
    //  * If the model is not found, a 404 HTTP exception will be thrown.
    //  * @param int $id ID
    //  * @return Topic the loaded model
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // protected function findModel($id)
    // {
    //     if (($model = Topic::findOne(['id' => $id])) !== null) {
    //         return $model;
    //     }

    //     throw new NotFoundHttpException('The requested page does not exist.');
    // }
}
