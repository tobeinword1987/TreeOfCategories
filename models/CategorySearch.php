<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Category;

/**
 * CategorySearch represents the model behind the search form of `app\models\Category`.
 */
class CategorySearch extends Category
{
    private $_category_arr = array();
    private $tree = array();
    private $data = [];

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'parent_id'], 'integer'],
            [['name'], 'safe'],
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
        $return = array();
        $query = Category::find();

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

        //Читаем все строчки и записываем в переменную $result
        $result = $query -> all();

        foreach ($result as $value) { //Обходим массив
            $return[$value->parent_id][] = $value;
        }

        $this -> _category_arr = $return;
    }

    public function outTree($parent_id, $level) {
        if (isset($this->_category_arr[$parent_id])) { //Если категория с таким parent_id существует
            foreach ($this->_category_arr[$parent_id] as $value) { //Обходим ее
                /**
                 * Выводим категорию
                 *  $level * 25 - отступ, $level - хранит текущий уровень вложености (0,1,2..)
                 */
                $this -> data[] = $value;
//                echo "<div style='margin-left:" . ($level * 25) . "px;'>" . $value->name . "</div>";
                $level++; //Увеличиваем уровень вложености
                //Рекурсивно вызываем этот же метод, но с новым $parent_id и $level
                $this->outTree($value->id, $level);
                $level--; //Уменьшаем уровень вложености
            }
        }
        return $this -> data;
    }

}
