<?php
    session_start();
    //number of items in the shopping cart
    $count=0;

    //retrieve the cart content
    if ( isset ( $_SESSION['cart'] ) ){
        $cart = $_SESSION['cart'];

        if  ( $cart ) {
            $items = explode(',', $cart);
            $count = count($items);
        }
    }
    $role = 0;
    if (isset($_SESSION['role'])){
        $role = $_SESSION['role'];
    }
    if (isset($_SESSION['id'])) {
        $session_id = $_SESSION['id'];
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Book pudhiyapaarvaimathiruvalluvar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>