<?php
class Page{
    private $rowcount; //数据表里共有多少行
    private $pagesize;  //每一页显示多少条记录
    private $pagecount; //总共可也分成多少页
    private $pagenow; //当前用户点击的页码
    
    function __construct($rcount,$psize,$pcount=1,$pnow=1) 
    {
        $this->rowcount=$rcount;
        $this->pagesize=$psize;
        $this->pagecount=ceil($this->rowcount/$this->pagesize);
        $this->pagenow=min($this->pagecount,max((int)@$_GET['page'],1));
    }
    //显示分页基本信息
    function pagesinfo(){
        echo "总数：";
        echo $this->rowcount."&nbsp;";
        echo "每页显示数量：";
        echo $this->pagesize."&nbsp;";
    }
    //输出所有页码信息
    function show($b)
    {
        $s='';
        for($i=1;$i<$this->pagecount;$i++){
            if($i== $this->pagenow){
                $s.="<span style='color:#ff0000';font-wight:bold;'> $i</span>&nbsp;";
            }else{
                $s.="<a href='?page=$i&$b'>[$i]</a>&nbsp;";
            }
        }
        return "页码：".$s;
    }
    function limit(){
        return "limit ".($this->pagenow-1)*$this->pagesize.",".$this->pagesize;
    }
}

