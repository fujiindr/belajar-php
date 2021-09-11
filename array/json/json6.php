<?php
$datafilm = '{
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
        "Comedy",
        "Drama",
        "Romance"
  ],
    "Director": "Mike Nichols",
    "Writers": [
        "Calder Willingham (screenplay)",
        "Buck Henry (screenplay)",
        "Charles Webb (based on the novel by)"
  ],
    "Actors": [
        "Anne Bancroft",
        "Dustin Hoffman",
        "Katharine Ross",
        "William Daniels"
  ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his father is business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinson is daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "Poster": "http://ia.media-imdb.com/images/M/MV5BMTQ0ODc4MDk4Nl5BMl5BanBnXkFtZTcwMTEzNzgzNA@@._V1_SX300.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
}';
$film = json_decode($datafilm);
?>
<html>
    <body>
            <table>
                <center>Data Film</center>  
                <h3 align = center><?php echo $film->Title;?></h3>
                <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg"
                alt="Spider" width="600" height="550"><br></center>
               

                <tr>
                    <td></td>    
                    <td></td>
                    <td><?php echo $film->Plot;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Tahun Rilis</th>
                    <td> : </td>
                    <td><?php echo $film->Year;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Tanggal Rilis</th>
                    <td> : </td>
                    <td><?php echo $film->Released;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Durasi Film</th>
                    <td> : </td>
                    <td><?php echo $film->Runtime;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Genre</th>
                    <td> : </td>
                    <td><?php echo implode(", ", $film->Genre);?>
                    </td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Director</th>
                    <td> : </td>
                    <td><?php echo $film->Director;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Penulis</th>
                    <td> : </td>
                    <td><li><?php echo implode("<li>", $film->Writers);?></li></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Pemeran</th>
                    <td> : </td>
                    <td><li><?php echo implode("<li>", $film->Actors);?></li></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Bahasa</th>
                    <td> : </td>
                    <td><?php echo $film->Language;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Negara</th>
                    <td> : </td>
                    <td><?php echo $film->Country;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Penghargaan</th>
                    <td> : </td>
                    <td><?php echo $film->Awards;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Nilai</th>
                    <td> : </td>
                    <td><?php echo $film->imdbRating;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>Vote</th>
                    <td> : </td>
                    <td><?php echo $film->imdbVotes;?></td>
                </tr>

                <tr>
                    <th style = 'text-align : left'>imbdID</th>
                    <td> : </td>
                    <td><?php echo $film->imdbID;?></td>
                </tr>

            </table>
    </body>
</html>