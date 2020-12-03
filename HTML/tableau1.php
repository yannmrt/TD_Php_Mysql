<!DOCTYPE html>
<html>
    <head>
        <title>Exo3</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php include('../menu.php'); ?>
        
    <div align="center">

        <h1>Liste des matières</h1> 

        <table border=2 with=60%>
            <thead>
              <tr>
                <th></th>
                <th>1er Semestre</th>
                <th>2ème Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td rowspan="3">SIO1</td>
                <td>SI1, SI2, SI3, SI4</td>
                <td>SI5,SI6</td>
              </tr>
              <tr>
                  <td>SLAM</td>
                  <td>SISR</td>
              </tr>
              <tr>
                <td>SLAM1, SLAM2</td>
                <td>SISR1, SISR2</td>
            </tr>
            </tbody>

            <tfoot>
              <tr>
                <td rowspan="3">SIO2</td>
                <td colspan="2">SI7</td>
              </tr>
              <tr>
                <td>SLAM</td>
                <td>SISR</td>
              </tr>
              <tr>
                <td>SLAM3, SLAM4, SLAM5</td>
                <td>SISR3, SISR4, SISR5</td>
              </tr>
            </tfoot>

          </table>
        </div>

        <div align="center">
          <a href="index.html">
             <button>Retour</button>
          </a>
      </div>
        
    </body>
</html>