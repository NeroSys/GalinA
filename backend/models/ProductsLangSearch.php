<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductsLang;

/**
 * ProductsLangSearch represents the model behind the search form of `common\models\ProductsLang`.
 */
class ProductsLangSearch extends ProductsLang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'item_id', 'lang_id'], 'integer'],
            [['lang', 'title', 'description', 'text'], 'safe'],
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
        $query = ProductsLang::find();

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
            'item_id' => $this->item_id,
            'lang_id' => $this->lang_id,
        ]);

        $query->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
