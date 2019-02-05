<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 28.12.18
     * Time: 12:45
     */

    namespace frontend\controllers;

    use Yii;

    use frontend\models\CreateTheme;

    class ThemeController extends AppController
    {


        public function actionCreate()
        {
            $this->Menu();

            $formData = Yii::$app->request->post();
            $model = new CreateTheme();
            if (Yii::$app->request->isPost) {
                $model->title = $formData['title'];
                $model->theme = $formData['theme'];
                $model->subtheme = $formData['subtheme'];
                $model->content = $formData['content'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('info', 'Вы добавили новое знание в Вашу базу знаний');
                };
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }


        public function actionSubcat() {
            $out = [];
            if (isset($_POST['depdrop_parents'])) {
                $parents = $_POST['depdrop_parents'];
                if ($parents != null) {
                    $cat_id = $parents[0];
                    $out = self::getSubCatList($cat_id);
                    // the getSubCatList function will query the database based on the
                    // cat_id and return an array like below:
                    // [
                    //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                    //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                    // ]
                    echo Json::encode(['output'=>$out, 'selected'=>'']);
                    return;
                }
            }
            echo Json::encode(['output'=>'', 'selected'=>'']);
        }

        public function actionProd() {
            $out = [];
            if (isset($_POST['depdrop_parents'])) {
                $ids = $_POST['depdrop_parents'];
                $cat_id = empty($ids[0]) ? null : $ids[0];
                $subcat_id = empty($ids[1]) ? null : $ids[1];
                if ($cat_id != null) {
                    $data = self::getProdList($cat_id, $subcat_id);
                    /**
                     * the getProdList function will query the database based on the
                     * cat_id and sub_cat_id and return an array like below:
                     *  [
                     *      'out'=>[
                     *          ['id'=>'<prod-id-1>', 'name'=>'<prod-name1>'],
                     *          ['id'=>'<prod_id_2>', 'name'=>'<prod-name2>']
                     *       ],
                     *       'selected'=>'<prod-id-1>'
                     *  ]
                     */

                    echo Json::encode(['output'=>$data['out'], 'selected'=>$data['selected']]);
                    return;
                }
            }
            echo Json::encode(['output'=>'', 'selected'=>'']);
        }

    }