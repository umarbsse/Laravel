<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('constants.SITE_NAME') }}::{{ isset($title) && !empty($title) ? $title : '' }}</title>
    <style>
        .success{
            background: green;
            color: white;
            padding: 5px 5px;
            border-radius: 5px;
        }
        .warning{
            background: yellow;
            color: #795548;
            padding: 5px 5px;
            border-radius: 5px;
        }
        .error{
            background: red;
            color: white;
            padding: 5px 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>