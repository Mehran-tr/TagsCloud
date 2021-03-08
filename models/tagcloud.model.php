<?php
class tagcloud_model{
    var $mysqli;
    var $tags; //array(id,name,total)
    var $largest;

    function __construct($conn)
    {
        $this->mysqli = $conn;


        // get tags and largest value

        $this->tags;
    }

    /*Utility Functions
    ------------------------------------------------------------ */
    function get_tags(){
            $this->tags = array();
            $this->largest = 0;

        $result = $this->mysqli->query("SELECT posts_to_tags.tag_id, tags.name, COUNT(posts_to_tags.tag_id) AS total FROM tags, posts_to_tags WHERE posts_to_tags.tag_id = tags.id GROUP BY posts_to_tags.tag_id");
            if ($result->num_rows > 0){

                while ($row = $result->fetch_object()){
                    //check for largest
                    if ($row->total > $this->largest){
                        $this->largest = $row->total;
                    }

                    //add tag to array

                    $this->tags[] = array('id' => $row->tag_id,'name'=>$row->name,'total'=>$row->total);
                }

                //sort tags
                usort($this->tags,array('tagcloud_model','compare_names'));
            }else{
                $this->tags = FALSE;
            }
    }

    function compare_names($a , $b){
        return strcmp($a['name'],$b['name']);
    }

    /*Display Functions
    ------------------------------------------------------------ */
    function get_tag_list(){

        if ($this->tags != FALSE){
            $data = '';
            $data .= "<table border='1' cellpadding='10'>";
            $data .= "<tr><th>ID</th><th>Tag Name</th><th>Count</th><th>Weight</th></tr>";
            foreach ($this->tags as $tag){
                //find weight
                $weight = round(($tag['total'] / $this->largest) * 10);

                $data .= "<tr>";
                $data .= "<td>".$tag['id']."</td>";
                $data .= "<td>".$tag['name']."</td>";
                $data .= "<td>".$tag['total']."</td>";
                $data .= "<td>".$weight."</td>";
                $data .= "</tr>";
            }
            $data .= "</table>";
            return $data;
        }else{
            return "No tags to display";
        }
    }

    function get_tag_cloud(){
        if ($this->tags != FALSE){

            //create unordered list
            $data = '';

            $data .= "<ul class='tagcloud'>";

            foreach ($this->tags as $tag){
                $weight = round(($tag['total'] / $this->largest) * 10);

                //create list item
                // create list item
                $data .= "<li><a href='tags.php?id=". $tag['id'] ."' class='tag". $weight ."'>";
                $data .= $tag['name'] . "<a></li>";
                $data .= "\n";
            }

            $data .= "</ul>";
            return $data;
        }else{
            return "No tags to display";
        }
    }

}