<?php
#Example #3 http_build_query() with complex arrays
$data = array('user'=>array('name'=>'Bob Smith',
                            'age'=>47,
                            'sex'=>'M',
                            'dob'=>'5/12/1956'),
              'pastimes'=>array('golf', 'opera', 'poker', 'rap'),
              'children'=>array('bobby'=>array('age'=>12,
                                               'sex'=>'M'),
                                'sally'=>array('age'=>8,
                                               'sex'=>'F')),
              'CEO');
echo "\n";echo "\n";
echo http_build_query($data, 'flags_');
echo "\n";echo "\n";

//user%5Bname%5D=Bob+Smith&user%5Bage%5D=47&user%5Bsex%5D=M&user%5Bdob%5D=5%2F12%2F1956&pastimes%5B0%5D=golf&pastimes%5B1%5D=opera&pastimes%5B2%5D=poker&pastimes%5B3%5D=rap&children%5Bbobby%5D%5Bage%5D=12&children%5Bbobby%5D%5Bsex%5D=M&children%5Bsally%5D%5Bage%5D=8&children%5Bsally%5D%5Bsex%5D=F&flags_0=CEO

?>
