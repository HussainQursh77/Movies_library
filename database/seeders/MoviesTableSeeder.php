<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'genre' => 'Drama',
                'release_year' => 1994,
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'
            ],
            [
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'genre' => 'Crime',
                'release_year' => 1972,
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'
            ],
            [
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'genre' => 'Action',
                'release_year' => 2008,
                'description' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.'
            ],
            [
                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'genre' => 'Crime',
                'release_year' => 1994,
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.'
            ],
            [
                'title' => 'Forrest Gump',
                'director' => 'Robert Zemeckis',
                'genre' => 'Drama',
                'release_year' => 1994,
                'description' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other historical events unfold from the perspective of an Alabama man with an IQ of 75.'
            ],
            [
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'genre' => 'Sci-Fi',
                'release_year' => 2010,
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.'
            ],
            [
                'title' => 'Fight Club',
                'director' => 'David Fincher',
                'genre' => 'Drama',
                'release_year' => 1999,
                'description' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.'
            ],
            [
                'title' => 'The Matrix',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'genre' => 'Sci-Fi',
                'release_year' => 1999,
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.'
            ],
            [
                'title' => 'Goodfellas',
                'director' => 'Martin Scorsese',
                'genre' => 'Crime',
                'release_year' => 1990,
                'description' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito.'
            ],
            [
                'title' => 'Schindler\'s List',
                'director' => 'Steven Spielberg',
                'genre' => 'Biography',
                'release_year' => 1993,
                'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.'
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'director' => 'Peter Jackson',
                'genre' => 'Adventure',
                'release_year' => 2003,
                'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.'
            ],
            [
                'title' => 'Star Wars: Episode IV - A New Hope',
                'director' => 'George Lucas',
                'genre' => 'Adventure',
                'release_year' => 1977,
                'description' => 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee, and two droids to save the galaxy from the Empire\'s world-destroying battle station while also attempting to rescue Princess Leia from the mysterious Darth Vader.'
            ],
            [
                'title' => 'The Silence of the Lambs',
                'director' => 'Jonathan Demme',
                'genre' => 'Thriller',
                'release_year' => 1991,
                'description' => 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.'
            ],
            [
                'title' => 'Saving Private Ryan',
                'director' => 'Steven Spielberg',
                'genre' => 'War',
                'release_year' => 1998,
                'description' => 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.'
            ],
            [
                'title' => 'The Green Mile',
                'director' => 'Frank Darabont',
                'genre' => 'Crime',
                'release_year' => 1999,
                'description' => 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.'
            ],
            [
                'title' => 'Gladiator',
                'director' => 'Ridley Scott',
                'genre' => 'Action',
                'release_year' => 2000,
                'description' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.'
            ],
            [
                'title' => 'The Lion King',
                'director' => 'Roger Allers, Rob Minkoff',
                'genre' => 'Animation',
                'release_year' => 1994,
                'description' => 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.'
            ],
            [
                'title' => 'The Avengers',
                'director' => 'Joss Whedon',
                'genre' => 'Action',
                'release_year' => 2012,
                'description' => 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.'
            ],
            [
                'title' => 'Jurassic Park',
                'director' => 'Steven Spielberg',
                'genre' => 'Adventure',
                'release_year' => 1993,
                'description' => 'A pragmatic paleontologist visiting an almost complete theme park is tasked with protecting a couple of kids after a power failure causes the park\'s cloned dinosaurs to run loose.'
            ],
            [
                'title' => 'Titanic',
                'director' => 'James Cameron',
                'genre' => 'Romance',
                'release_year' => 1997,
                'description' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.'
            ]
        ];

        // Insert data into the database
        DB::table('movies')->insert($movies);
    }
}
