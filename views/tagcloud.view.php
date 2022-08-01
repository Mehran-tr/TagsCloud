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

        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/wc.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
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

        </div>
        <div class="col-md-4 order-md-2 mb-4">
            <div id="chartdiv"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">

            <h2>Tags:</h2>
            <?= $data['tag_cloud']; ?>
        </div>

    </div>


</div>


</body>
<script>
    am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


// Add series
// https://www.amcharts.com/docs/v5/charts/word-cloud/
        var series = root.container.children.push(am5wc.WordCloud.new(root, {
            categoryField: "tag",
            valueField: "weight",
            maxFontSize: am5.percent(15)
        }));

// Configure labels
        series.labels.template.setAll({
            fontFamily: "Courier New"
        });


        setInterval(function() {
            am5.array.each(series.dataItems, function(dataItem) {
                var value = Math.random() * 65;
                value = value - Math.random() * value;
                dataItem.set("value", value);
                dataItem.set("valueWorking", value);
            })
        }, 5000)


// Data from:
// https://insights.stackoverflow.com/survey/2021#section-most-popular-technologies-programming-scripting-and-markup-languages
        series.data.setAll(
            [
            <?php foreach($data['tag_weight'] as $tagData){ ?>
        {
            tag: "<?= $tagData['tag']; ?>",
            weight: <?= $tagData['weight']; ?>
        },

             <?php } ?>
    ]
            );

    }); // end am5.ready()
</script>
</html> 
