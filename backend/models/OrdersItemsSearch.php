<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrdersItems;

/**
 * OrdersItemsSearch represents the model behind the search form of `common\models\OrdersItems`.
 */
class OrdersItemsSearch extends OrdersItems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'product_id'], 'integer'],
            [['name', 'qty_item'], 'safe'],
            [['price', 'sum_item'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = OrdersItems::find();

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
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'price' => $this->price,
            'sum_item' => $this->sum_item,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'qty_item', $this->qty_item]);

        return $dataProvider;
    }
}
