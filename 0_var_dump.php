<?php
// @TODO
$username = 'Ivy';//스칼라 변수
$user_array1 = ['Ivy', 34, 'Web programming'];
$user_array2 = ['name' => 'Ivy', 'age' => 34, 'major' => 'web programming', ]; //키 값 배열

class User {
  public $name;
  public $age;
  public $major;
  public function __construct($name, $age, $major) {
  //정의 할 때 매개변수
    $this->name = $name;
    $this->age = $age;
    $this->major = $major;
  }
}
//호출 할 때 인수
$user_object = new User('Ivy', 34, 'Web programming');


?>
<?php //include 'includes/header.php' ?>

  <p>Scalar: <?php var_dump($username); ?></p>
  <p>Array1:  <?php var_dump($user_array1); ?></p>
  <p>Array2:  <?php var_dump($user_array2); ?></p>
  <p>Object: <?php var_dump($user_object); ?></p>

<?php //include 'includes/footer.php' ?>