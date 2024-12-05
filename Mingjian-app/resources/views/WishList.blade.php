<!DOCTYPE html>
<html>
<head>
<style>
        h1{
            text-align: center;
            font-weight: bold;
        }
        /*  border */
        table {
            border: 2px solid black; 
            border-collapse: collapse; 
            margin: auto; 
        }
        /* inner border */
        th, td {
            border: 1px solid gray; 
            padding: 10px; 
            text-align: center; 
        }
    </style>
</head>
    <body>
    
            <h1>Wünsche-Übersicht</h1>
    
        
            <table>
            <th>Titel</th>
            <th>Beschreibung</th>
            <th>Status</th>
            <th>Erstellt am</th>

            

            @foreach($wishes as $wish)
            <tr>
                <td>{{ $wish->title }}</td>
                <td>{{ $wish->description }}</td>
                <td>@if ($wish->is_fulfilled)
                        Erfüllt
                    @else
                        Nicht erfüllt
                    @endif
                </td>
                <td>{{ $wish->created_at }}</td>
            </tr>
            @endforeach
            
            </table>
    
        
        
    </body>


</html>

