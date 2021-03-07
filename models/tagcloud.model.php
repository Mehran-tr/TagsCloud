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

            $result = $this->mysqli->query("Select posts_to_tags.tag_id,tags.name,Count (posts_to_tags.tag_id) AS total
            FROM tags,posts_to_tags WHERE posts_to_tags.tag_id = tags.id GROUP BY posts_to_tags.tag_id");

            if ($result->num_rows > 0){

                while ($row = $result->fetch_object()){
                    //check for largest
                    if ($row->total > $this->largest){
                        $this->largest = $row->total;
                    }

                    //add tag to array

                    $this->tags[] = array('id' => $row->tag_id,'name'=>$row->name,'total'=>$row->total);
                }
            }else{
                $this->tags = FALSE;
            }
    }



    /*Display Functions
    ------------------------------------------------------------ */
    function get_tag_list(){

    }

    function get_tag_cloud(){

    }

}