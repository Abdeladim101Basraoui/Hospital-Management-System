<?php
function encrypt()
{
 return md5('root');
}
echo md5(encrypt(),false);
?>