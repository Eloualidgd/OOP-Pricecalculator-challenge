<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view</title>
</head>

<body>

<form method="post">
    <select name="cust">
        <?php foreach ($allCustomers AS $customerItem): ?>

            <option value="<?php echo  'Name Customer : ' . $customerItem->getName() . "<br>" . 'Custumoer iD : ' . $customerItem->getId() . "<br>" . 'Group
             Id : ' . $customerItem->getGroup() . "<br>"  ?>">





<!--        <option value="--><?php //echo $customerItem->getId()?><!--" --><?php //if (isset($_POST["cust"]) && $_POST["cust"]== $customerItem->getId())
//            echo "selected='selected'"?><!   --><?php //echo $customerItem->getName()?>

            <?php echo $customerItem->getName() ?></option>

        <?php endforeach; ?>
    </select>


    <br>

    <select name="prod">
        <?php foreach ($allProducts AS $productItem): ?>

            <option value="<?php echo  'Name Product : ' . $productItem->getName() . "<br>" . 'Product iD : ' . $productItem->getId() . "<br>" . 'Product
            Description : ' .$productItem->getDescription() . "<br>" . 'Price : ' .$productItem->getPrice() ?>">


                <?php echo $productItem->getName() ?>



            </option>
        <?php endforeach; ?>
    </select>


    <input type="submit" name="submit" value="send">
</form>
<?php echo $_POST['cust']; ?>
<?php echo $_POST['prod']  ?>


<br><br>




<?php var_dump($product); ?>


</body>
</html>