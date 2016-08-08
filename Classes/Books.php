<?php
require_once('../../Classes/ClassParent.php');
class Books extends ClassParent 
{
    var $pin = null;
    var $profile = null;
    var $archived = null;
	/*var $pk = null;
	var $callNo = null;
	var $title = null;
	var $author = null;
    var $subject = null;
    var $cover = null;*/

	public function __construct(
        $pin,
        $profile,
        $archived
        // $author,
        // $subject,
        // $cover
        ){
        
        $fields = get_defined_vars();
        
        if(empty($fields)){
            return(FALSE);
        }

        //sanitize
        foreach($fields as $k=>$v){
            $this->$k = pg_escape_string(trim(strip_tags($v)));
        }

        return(true);
    }

    /*public function save(){
    	$sql = <<<EOT
    		insert into books
    		(
    			callNo,
                title,
                author,
                subject,
                cover
    		)
			values
			(
				'$this->callNo',
				'$this->title',
                '$this->author',
                '$this->subject',
                '$this->cover'
			);
EOT;

		return ClassParent::insert($sql);
    }*/

    /*public function fetch(){
    	$sql = <<<EOT
    		select
    			pk,
    			callNo,
                title,
                author,
                subject,
                cover
    		from books
EOT;

		return ClassParent::get($sql);
    }

    public function fetchone(){
        $sql = <<<EOT
            select
                pk,
                callNo,
                title,
                author,
                subject,
                cover
            from books
            where pk = $this->pk
EOT;

        return ClassParent::get($sql);
    }

    public function edit(){
        $sql = <<<EOT
            UPDATE FROM books WHERE pk = $this->pk;
EOT;

        return ClassParent::get($sql);
    }*/

    public function fetch(){
        $sql = <<<EOT
            select
                profile
            from profiles;
EOT;

        return ClassParent::get($sql);
    }

}
?>