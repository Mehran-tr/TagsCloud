<!DOCTYPE html>
<html>
<head>
    <title>Tag Cloud</title>

    <style type="text/css">
        table { width:340px; border-collapse: collapse; }

        .tagcloud { margin: 0; padding:20px; width:300px; border:1px solid #000;
            text-align: center; line-height: 2.8em; }
        .tagcloud li { display: inline; padding:0 5px; }
        .tagcloud a { padding:0; }

        .tagcloud a.tag1 { font-size: 0.7em; font-weight: 100; }
        .tagcloud a.tag2 { font-size: 0.8em; font-weight: 200; }
        .tagcloud a.tag3 { font-size: 0.9em; font-weight: 300; }
        .tagcloud a.tag4 { font-size: 1em; font-weight: 400; }
        .tagcloud a.tag5 { font-size: 1.2em; font-weight: 500; }
        .tagcloud a.tag6 { font-size: 1.4em; font-weight: 600; }
        .tagcloud a.tag7 { font-size: 1.6em; font-weight: 700; }
        .tagcloud a.tag8 { font-size: 1.8em; font-weight: 800; }
        .tagcloud a.tag9 { font-size: 2.2em; font-weight: 900; }
        .tagcloud a.tag10 { font-size: 2.5em; font-weight: 900; }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body class="bg-light" data-new-gr-c-s-check-loaded="8.901.0" data-gr-ext-installed="">

<div class="container">
    <div class="py-5 text-center">

        <h2>Tags Cloud</h2>

    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            <div class="table-responsive">
                <h2>List:</h2>
                <?= $data['tag_list']; ?>
            </div>



            <h2>Cloud:</h2>
            <?= $data['tag_cloud']; ?>
        </div>

    </div>


</div>



</body>
</html> 
