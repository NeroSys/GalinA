<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pages;

/**
 * PagesSearch represents the model behind the search form of `common\models\Pages`.
 */
class PagesSearch extends Pages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'visible', 'sort'], 'integer'],
            [['name', 'slug', 'url', 'og_type', 'og_img', 'og_video', 'og_locale', 'og_siteName', 'main_img'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pages::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'visible' => $this->visible,
            'sort' => $this->sort,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'og_type', $this->og_type])
            ->andFilterWhere(['like', 'og_img', $this->og_img])
            ->andFilterWhere(['like', 'og_video', $this->og_video])
            ->andFilterWhere(['like', 'og_locale', $this->og_locale])
            ->andFilterWhere(['like', 'og_siteName', $this->og_siteName])
            ->andFilterWhere(['like', 'main_img', $this->main_img]);

        return $dataProvider;
    }
}
