<?php
  
namespace App\Imports;
  
use App\Models\News;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
  
class NewsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new News([
            'title'     => $row['title'],
            'content'    => $row['content'], 
            'date'    => $row['date'], 
            'source'    => $row['source'], 

        ]);
    }
}       
