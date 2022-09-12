<?php


try{
    
    if(fopen("tt.txt","r")){
        echo "success reading text file \n";
    }else{
        throw new Exception("file can't reading! \n");
    }
}catch(Exception $problem){
    echo $problem->getMessage();
    
}finally{
    echo "catching error process done.";
}