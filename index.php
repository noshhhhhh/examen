<html>

<head>

<title>Problema</title>

</head>

<body>

<?php

function retornarColorHexa($rojo, $verde, $azul)

{

    $color = sprintf("#%02X%02X%02X", $rojo, $verde, $azul);

    return $color;

}

?>

<table>

<tr>

    <td bgcolor="<?php echo retornarColorHexa(255, 0, 0) ?>">ALFREDO</td>

    <td bgcolor="<?php echo retornarColorHexa(0, 255, 0) ?>">RODRIGUEZ</td>

    <td bgcolor="<?php echo retornarColorHexa(0, 0, 255) ?>">No. De control</td>

</tr>

<tr>

    <td colspan="3" bgcolor="<?php echo retornarColorHexa(255, 255, 0) ?>">GARCIA</td>

</tr>

<tr>

    <td colspan="3" bgcolor="<?php echo retornarColorHexa(0, 255, 255) ?>">No. de control: 200911164</td>

</tr>

</table>

</body>

</html>
