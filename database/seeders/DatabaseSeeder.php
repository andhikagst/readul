<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Book;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::create([
            'name'     => 'Super Admin',
            'email'    => 'admin@contoh.com',
            'password' => bcrypt('rahasia123'),
        ]);

        User::create([
            'name'     => 'user',
            'email'    => 'readul@gmail.com',
            'password' => bcrypt('bedul123'),
        ]);

        Book::create([
            'title'     => 'Lost in the Never Woods',
            'author'    => 'Aiden Thomas',
            'genre'    => 'Fantasy, Mystery, Young Adult, Thriller',
            'rating' => 4.25,  
            'synopsis' => 'Lost in the Never Woods" by Aiden Thomas is a dark, mysterious retelling of Peter Pan with a thrilling twist. The story follows Wendy, who, five years ago, went missing in the woods along with her two brothers. While she eventually returned, her brothers never did. Now, children in her town are disappearing again, and Wendy finds herself drawn back into the mystery.
                        One night, she nearly runs over an unconscious boy in the middle of the road—Peter, a figure she thought only existed in her childhood stories. He insists that if they don’t act fast, the missing children will suffer the same fate as her brothers. To save them, Wendy must confront the secrets lurking in the woods and face the truth she has long tried to forget.
                        This novel blends fantasy, mystery, and psychological depth, offering a fresh take on the Peter Pan legend while exploring themes of trauma, resilience, and the magic of childhood. Would you like a deeper dive into its themes or characters?',
            'url_image' => 'book-covers/lost-in-the-never-woods.png',
            'slug' =>'lost-in-the-never-woods',
        ]);

        Book::create([
            'title'     => 'Aroma Karsa',
            'author'    => 'Dee Lestari',
            'genre'    => 'Fantasy, Mystery, Drama',
            'rating' => 5,  
            'synopsis' => 'Aroma Karsa tells the story of Jati Wesi, a young man born with an extraordinary sense of smell that allows him to detect scents far beyond the human range. Working at a perfume company, his talent soon attracts the attention of Raras Prayagung, the powerful owner of Kemara, a luxurious fragrance brand.
                        Raras is on a mysterious mission to uncover the secret of Puspa Karsa — a mythical plant said to be able to control human will through its scent. As Jati delves deeper into this quest, he meets Tanaya Suma, Raras’s adopted daughter, who also possesses a unique olfactory ability. 
                        Their journey leads them to dark family secrets, ancient Javanese myths, and a hidden world of scents and powers beyond imagination. Torn between truth and loyalty, Jati must confront the origins of his gift and the destiny it ties him to.
                        Blending elements of mystery, mythology, and science, Aroma Karsa explores the invisible yet powerful influence of scent on human life, and the unbreakable connection between nature, heritage, and identity.',
            'url_image' => 'book-covers/aroma-karsa.jpg',
            'slug' =>'aroma-karsa',
        ]);

        Book::create([
            'title'     => 'Atomic Habits',
            'author'    => 'James Clear',
            'genre'    => 'Self-help, Psychology',
            'rating' => 3.5,  
            'synopsis' => 'Atomic Habits is a groundbreaking self-help book by James Clear that explores how tiny changes in behavior can lead to remarkable results. The book argues that success is not the product of massive actions, but rather the outcome of small habits practiced consistently over time.
                        Clear introduces a four-step model of habit formation: cue, craving, response, and reward, and provides practical strategies to build good habits and break bad ones. Through a blend of scientific research, real-life stories, and actionable advice, Atomic Habits teaches readers how to design their environment, create systems, and shift their identity to make lasting change easier and more effective.
                        Whether you\'re aiming for personal growth, increased productivity, or long-term success, Atomic Habits offers a powerful framework to transform your daily routines and, ultimately, your life.',
            'slug' =>'atomic-habits',
        ]);

        Book::create([
            'title'     => 'The Waking that Kills',
            'author'    => 'Stephen Gregory',
            'genre'    => 'Psychological, Horror, Supranatural',
            'rating' => 4.75,  
            'synopsis' => 'The Waking That Kills is a chilling psychological horror novel by Stephen Gregory, best known for his eerie and atmospheric storytelling. The story follows a man who inherits a remote, crumbling house deep in the Welsh countryside after the mysterious death of his estranged father.
                        As he settles into the strange and isolated estate with his wife and child, he begins to experience disturbing visions and dreams that blur the line between reality and nightmare. The house seems haunted not by ghosts in the traditional sense, but by the lingering presence of his father’s tormented spirit and the twisted legacy he left behind.
                        Driven by a creeping sense of dread, the protagonist uncovers dark family secrets and faces an unsettling descent into madness. The novel explores themes of inheritance, obsession, and the psychological weight of unresolved trauma.
                        Haunting and poetic, The Waking That Kills is a deeply atmospheric tale that lingers long after the last page is turned.',
            'slug' =>'atomic-habits',
        ]);
    }
}
