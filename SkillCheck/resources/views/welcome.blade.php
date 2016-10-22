<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skill Check!</title>

        <!-- Fonts -->

        <!-- Styles -->
            <link rel="stylesheet" href="/css/reset.css" type="text/css">
            <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
            <link rel="stylesheet" href="/css/style.css" type="text/css">


    </head>


    <body>

<div class = "jumbotron">
<div class= "centered">

<h1><b>Product Form</b></h1>

{!! Form::open(['url' => '/products', 'files' => true]) !!}
{!! Form::text('productName', '', ['placeholder' => 'Product Name']) !!}<br>
{!! Form::text('quantityinStock', '', ['placeholder' => 'Quantity in Stock']) !!}<br>
{!! Form::text('priceperItem', '', ['placeholder' => 'Price Per Item']) !!}<br>
{!! Form::submit('Submit', array('class' => 'btn btn-success btn-margin-top')) !!}

{!! Form::close() !!}

</div>
</div>

</body>
</html>




{{-- 
Create a webpage with a form that has the following text input fields: Product name, Quantity in stock, Price per item.

The submitted data of the form should be saved in an XML / JSON file with valid XML / JSON syntax.
Underneath of the form, the web page should display all of the data which has been submitted in rows ordered by date time submitted, the order of the data columns should be: Product name, Quantity in stock, Price per item, Datetime submitted, Total value number.
The "Total value number" should be calculated as (Quantity in stock * Price per item).
The last row should how a sum total of all of the Total Value numbers.
For extra credit, include functionality to edit each line. --}}
