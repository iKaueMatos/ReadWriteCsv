<?php

namespace App\Files;


/**
 * Summary of Csv
 */
class Csv
{
    /**
     * Method responsible for reading a csv file
     * @param string $file
     * @param boolean $header
     * @param string $delimitador
     * @return array
     */
    public static function readFile($file,$header = true,$delimitador = ',')
    {
      //verification file exist
      if (!file_exists($file)) {
        
        die("\nArquivo não encontrado");

      }

      //date row and file
      $date = [];
      //open file 
      $csv = fopen($file,'r');

      //header and date (primary row)
      $headerDate = $header ? fgetcsv($csv,0,$delimitador): [];
     

      //iterates the file by reading all the lines
      while ($row = fgetcsv($csv,0,$delimitador)) {
        echo "<pre>";
        print_r($headerDate);
        echo "</pre>";
        $date[] = $header ? array_combine($headerDate,$row) : $row;
      }

      fclose($csv);

      return $date;
    }

    /** method responsible for creating a csv file
     * 
     * @param string $file
     * @param array $date
     * @param boolean $delimitador
     * @return void
     */
    public static function createFile($file,$date,$delimitador = ',')
    {
      //open file write
      $csv = fopen($file,'w');

      //create body file csv 
      foreach ($date as $row) {
    
        fputcsv($csv,$row,$delimitador);
      }

      fclose($csv);

      //sucess 
      return true;
      
    }

}

    



