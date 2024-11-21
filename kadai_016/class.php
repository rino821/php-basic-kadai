<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //クラスの定義
    class Food {
      //プロパティの定義
      public $name;
      public $price;
      //コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      //メソッドを定義
      public function show_price() {
        echo $this->price;
      }
    }
    //インスタンス化する
    $food = new Food('potato',250);
    //値を出力する
    print_r($food);
    echo '<br>';

    //クラスの定義
    class Animal {
      //プロパティの定義
      public $name;
      public $height;
      public $weight;
      //コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      //メソッドを定義
      public function show_height() {
        echo $this->height;
      }
    }
    //インスタンス化する
    $animal = new Animal('dog',60,5000);
    //値を出力する
    print_r($animal);
    echo '<br>';
    //メソッドを出力
    $food->show_price();
    echo '<br>';
    //メソッドを出力
    $animal->show_height();
    ?>
  </p>
</body>
</html>