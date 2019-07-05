

<?php
include_once 'connect.php';
include_once 'layout/header.php';
session_start();

$member = $_SESSION['member'];
$account = $member->account;

$sql = "SELECT * FROM product";
// $result = $mysqli->query($sql);
$stmt = $mysqli->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_all();

?>
<h1>Welcome <?php echo $member->account ?></h1>

<input class = "btn btn-primary" type = "submit" value = "logout">
<hr>
<?php if(isset($_SESSION['msg'])) echo "<div class = 'alert alert-danger'>".$_SESSION['msg']."</div>"?>
<table class = "table table-hover" style = "width:100%">
    <tr>
        <td>id</td>
        <td>product name</td>
        <td>product price</td>
        <td>quantity</td>
        <td></td>
    </td>
    <?php
        foreach($product as $p){
            echo '<tr>';
            foreach($p as $a){
                 echo '<td>';
                 echo $a;
                 echo '</td>';
                 
            }
            echo "<td><form action = 'add_cart.php' method = 'post'><input type = 'hidden' id = 'id' name = 'id' value = '{$p[0]}'><input type = 'number' id ='quantity' min = 0 name = 'quantity'><input class = 'btn btn-info' type = 'submit' name = 'add' value = 'add cart'></form><button class = 'add btn btn-primary' type = 'submit' name = 'ajax'>ajax版本</button></td>";
            
            echo '</tr>';
        }
        
    ?>
</table>

<script>

$(".add").click(function() {
    var quantity = $(this).closest('tr').find('#quantity').val();
    var id = $(this).closest('tr').find('#id').val();
    var clickevent = $(this);
    $.ajax({
        url: "add_cart.php",
        data: {
            quantity: quantity,
            id : id
        },
        type: "POST",
        dataType: 'json',
        success: function(msg) {
                console.log(msg);
                clickevent.closest('tr').find('#quantity').val(quantity);
            },
            error: function(xhr) {
                alert(JSON.stringify(xhr));
                console.log("fail");
            },
    });
});
</script>