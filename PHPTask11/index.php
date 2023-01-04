<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <?php 
    $a1 = 0;
    $b1 = 0;
    $a2 = 0;
    $b2 = 1;
    $a3 = 1;
    $b3 = 0;
    $a4 = 1;
    $b4 = 1

    ?>
 <p>Гибкое сравнение в PHP</p>
    
    <table class="table1">
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>'1'</th>
        <th>null</th>
        <th>'php'</th>
      </tr>
    
      <tr>
        <th>true</th>
        <td><?php echo var_export(true == true) ?></td>
        <td><?php echo var_export(true == false)  ?></td>
        <td><?php echo var_export(true == 1)  ?></td>
        <td><?php echo var_export(true == 0)  ?></td>
        <td><?php echo var_export(true == -1)  ?></td>
        <td><?php echo var_export(true == '1')  ?></td>
        <td><?php echo var_export(true == null)  ?></td>
        <td><?php echo var_export(true == 'php')  ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php echo var_export(false == true) ?></td>
        <td><?php echo var_export(false == false)  ?></td>
        <td><?php echo var_export(false == 1)  ?></td>
        <td><?php echo var_export(false == 0)  ?></td>
        <td><?php echo var_export(false == -1)  ?></td>
        <td><?php echo var_export(false == '1')  ?></td>
        <td><?php echo var_export(false == null)  ?></td>
        <td><?php echo var_export(false == 'php')  ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php echo var_export(1 == true) ?></td>
        <td><?php echo var_export(1 == false) ?></td>
        <td><?php echo var_export(1 == 1)  ?></td>
        <td><?php echo var_export(1 == 0)  ?></td>
        <td><?php echo var_export(1 == -1)  ?></td>
        <td><?php echo var_export(1 == '1')  ?></td>
        <td><?php echo var_export(1 == null) ?></td>
        <td><?php echo var_export(1 == 'php')  ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php echo var_export(0 == true) ?></td>
        <td><?php echo var_export(0 == false) ?></td>
        <td><?php echo var_export(0 == 1)  ?></td>
        <td><?php echo var_export(0 == 0)  ?></td>
        <td><?php echo var_export(0 == -1)  ?></td>
        <td><?php echo var_export(0 == '1')  ?></td>
        <td><?php echo var_export(0 == null)  ?></td>
        <td><?php echo var_export(0 == 'php')  ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php echo var_export(-1 == true) ?></td>
        <td><?php echo var_export(-1 == false) ?></td>
        <td><?php echo var_export(-1 == 1)  ?></td>
        <td><?php echo var_export(-1 == 0)  ?></td>
        <td><?php echo var_export(-1 == -1)  ?></td>
        <td><?php echo var_export(-1 == '1')  ?></td>
        <td><?php echo var_export(-1 == null)  ?></td>
        <td><?php echo var_export(-1 == 'php')  ?></td>
      </tr>
      <tr>
        <th>'1'</th>
        <td><?php echo var_export('1' == true) ?></td>
        <td><?php echo var_export('1' == false) ?></td>
        <td><?php echo var_export('1' == 1)  ?></td>
        <td><?php echo var_export('1' == 0)  ?></td>
        <td><?php echo var_export('1'== -1)  ?></td>
        <td><?php echo var_export('1'== '1')  ?></td>
        <td><?php echo var_export('1'== null)  ?></td>
        <td><?php echo var_export('1'== 'php')  ?></td>
      <tr>
        <th>null</th>
        <td><?php echo var_export(null == true) ?></td>
        <td><?php echo var_export(null == false) ?></td>
        <td><?php echo var_export(null == 1)  ?></td>
        <td><?php echo var_export(null == 0)  ?></td>
        <td><?php echo var_export(null == -1)  ?></td>
        <td><?php echo var_export(null == '1')  ?></td>
        <td><?php echo var_export(null == null)  ?></td>
        <td><?php echo var_export(null == 'php')  ?></td>
      </tr>
      <tr>
        <th>'php'</th>
        <td><?php echo var_export('php' == true) ?></td>
        <td><?php echo var_export('php' == false) ?></td>
        <td><?php echo var_export('php' == 1)  ?></td>
        <td><?php echo var_export('php' == 0)  ?></td>
        <td><?php echo var_export('php' == -1)  ?></td>
        <td><?php echo var_export('php' == '1')  ?></td>
        <td><?php echo var_export('php' == null)  ?></td>
        <td><?php echo var_export('php' == 'php')  ?></td>
      </tr>
      
    </table>

    <p>Жёсткое  сравнение в PHP</p>

    <table class="table2">
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>'1'</th>
        <th>null</th>
        <th>'php'</th>
      </tr>
    
      <tr>
        <th>true</th>
        <td><?php echo var_export(true === true) ?></td>
        <td><?php echo var_export(true === false)  ?></td>
        <td><?php echo var_export(true === 1)  ?></td>
        <td><?php echo var_export(true === 0)  ?></td>
        <td><?php echo var_export(true === -1)  ?></td>
        <td><?php echo var_export(true === '1')  ?></td>
        <td><?php echo var_export(true === null)  ?></td>
        <td><?php echo var_export(true === 'php')  ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php echo var_export(false === true) ?></td>
        <td><?php echo var_export(false === false)  ?></td>
        <td><?php echo var_export(false === 1)  ?></td>
        <td><?php echo var_export(false === 0)  ?></td>
        <td><?php echo var_export(false === -1)  ?></td>
        <td><?php echo var_export(false === '1')  ?></td>
        <td><?php echo var_export(false === null)  ?></td>
        <td><?php echo var_export(false === 'php')  ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php echo var_export(1 === true) ?></td>
        <td><?php echo var_export(1 === false) ?></td>
        <td><?php echo var_export(1 === 1)  ?></td>
        <td><?php echo var_export(1 === 0)  ?></td>
        <td><?php echo var_export(1 === -1)  ?></td>
        <td><?php echo var_export(1 === '1')  ?></td>
        <td><?php echo var_export(1 === null)  ?></td>
        <td><?php echo var_export(1 === 'php')  ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php echo var_export(0 === true) ?></td>
        <td><?php echo var_export(0 === false) ?></td>
        <td><?php echo var_export(0 === 1)  ?></td>
        <td><?php echo var_export(0 === 0)  ?></td>
        <td><?php echo var_export(0 === -1)  ?></td>
        <td><?php echo var_export(0 === '1')  ?></td>
        <td><?php echo var_export(0 === null)  ?></td>
        <td><?php echo var_export(0 === 'php')  ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php echo var_export(-1 === true) ?></td>
        <td><?php echo var_export(-1 === false) ?></td>
        <td><?php echo var_export(-1 === 1)  ?></td>
        <td><?php echo var_export(-1 === 0)  ?></td>
        <td><?php echo var_export(-1 === -1)  ?></td>
        <td><?php echo var_export(-1 === '1')  ?></td>
        <td><?php echo var_export(-1 === null)  ?></td>
        <td><?php echo var_export(-1 === 'php')  ?></td>
      </tr>
      <tr>
        <th>'1'</th>
        <td><?php echo var_export('1' === true) ?></td>
        <td><?php echo var_export('1' === false) ?></td>
        <td><?php echo var_export('1' === 1)  ?></td>
        <td><?php echo var_export('1' === 0)  ?></td>
        <td><?php echo var_export('1' === -1)  ?></td>
        <td><?php echo var_export('1' === '1')  ?></td>
        <td><?php echo var_export('1' === null)  ?></td>
        <td><?php echo var_export('1' === 'php')  ?></td>
      <tr>
        <th>null</th>
        <td><?php echo var_export(null === true) ?></td>
        <td><?php echo var_export(null === false) ?></td>
        <td><?php echo var_export(null === 1)  ?></td>
        <td><?php echo var_export(null === 0)  ?></td>
        <td><?php echo var_export(null === -1)  ?></td>
        <td><?php echo var_export(null === '1')  ?></td>
        <td><?php echo var_export(null === null)  ?></td>
        <td><?php echo var_export(null === 'php')  ?></td>
      </tr>
      <tr>
        <th>'php'</th>
        <td><?php echo var_export('php' === true) ?></td>
        <td><?php echo var_export('php' === false) ?></td>
        <td><?php echo var_export('php' === 1)  ?></td>
        <td><?php echo var_export('php' === 0)  ?></td>
        <td><?php echo var_export('php' === -1)  ?></td>
        <td><?php echo var_export('php' === '1')  ?></td>
        <td><?php echo var_export('php' === null)  ?></td>
        <td><?php echo var_export('php' === 'php')  ?></td>
      </tr>
      
    </table>


    
  </body>
</html>
