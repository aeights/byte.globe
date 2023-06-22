<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'What is AI?',
                'slug' => 'what-is-ai',
                'image' => 'AI.jpeg',
                'body' => 'What is artificial intelligence (AI)?
                Artificial intelligence is the simulation of human intelligence processes by machines, especially computer systems. Specific applications of AI include expert systems, natural language processing, speech recognition and machine vision.
                
                How does AI work?
                As the hype around AI has accelerated, vendors have been scrambling to promote how their products and services use it. Often, what they refer to as AI is simply a component of the technology, such as machine learning. AI requires a foundation of specialized hardware and software for writing and training machine learning algorithms. No single programming language is synonymous with AI, but Python, R, Java, C++ and Julia have features popular with AI developers.
                
                In general, AI systems work by ingesting large amounts of labeled training data, analyzing the data for correlations and patterns, and using these patterns to make predictions about future states. In this way, a chatbot that is fed examples of text can learn to generate lifelike exchanges with people, or an image recognition tool can learn to identify and describe objects in images by reviewing millions of examples. New, rapidly improving generative AI techniques can create realistic text, images, music and other media.
                
                AI programming focuses on cognitive skills that include the following:
                
                Learning. This aspect of AI programming focuses on acquiring data and creating rules for how to turn it into actionable information. The rules, which are called algorithms, provide computing devices with step-by-step instructions for how to complete a specific task.
                Reasoning. This aspect of AI programming focuses on choosing the right algorithm to reach a desired outcome.
                Self-correction. This aspect of AI programming is designed to continually fine-tune algorithms and ensure they provide the most accurate results possible.
                Creativity. This aspect of AI uses neural networks, rules-based systems, statistical methods and other AI techniques to generate new images, new text, new music and new ideas.',
                'status' => 'Accepted',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'What is Network?',
                'slug' => 'what-is-network',
                'image' => 'Network.webp',
                'body' => 'What is Network?
                A computer network can be described as a system of interconnected devices that can communicate using some common standards called the Internet protocol suite or TCP/IP. These devices communicate to exchange network resources, such as files and printers, and network services.
                Types of Computer Networks
                Listed below are the most common types of computer networks:

                Local Area Network (LAN) – LANs are commonly used in small to medium size companies, households, buildings, etc., with limited space.
                Personal Area Network (PAN) – PAN covers a short distance of 10 meters. Bluetooth is an example of PAN.
                Metropolitan Area Network (MAN) – MANs are used in a single geographic region, such as a city or town.
                Wide Area Network (WAN) – WANs cover larger areas like different states and countries.
                Wireless Local Area Network (WLAN) – Wireless LAN is used for wireless networks, connecting wired and wireless devices.',
                'status' => 'Accepted',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'What is Programming?',
                'slug' => 'what-is-programming',
                'image' => 'Programming.jpg',
                'body' => 'What is programming?
                Programming refers to a technological process for telling a computer which tasks to perform in order to solve problems. You can think of programming as a collaboration between humans and computers, in which humans create instructions for a computer to follow (code) in a language computers can understand. 
                Programming enables so many things in our lives. Here are some examples: 
                When you browse a website to find information, contact a service provider, or make a purchase, programming allows you to interact with the site’s on-page elements, such as sign-up or purchase buttons, contact forms, and drop-down menus.
                The programming behind a mobile app can make it possible for you to order food, book a rideshare service, track your fitness, access media, and more with ease. 
                Programming helps businesses operate more efficiently through different software for file storage and automation and video conferencing tools to connect people globally, among other things. 
                Space exploration is made possible through programming.  ',
                'status' => 'Accepted',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'What is Games?',
                'slug' => 'what-is-games',
                'image' => 'Programming.jpg',
                'body' => 'A game is a structured form of play, usually undertaken for entertainment or fun, and sometimes used as an educational tool.[1] Many games are also considered to be work (such as professional players of spectator sports or games) or art (such as jigsaw puzzles or games involving an artistic layout such as Mahjong, solitaire, or some video games).
                Games are sometimes played purely for enjoyment, sometimes for achievement or reward as well. They can be played alone, in teams, or online; by amateurs or by professionals. The players may have an audience of non-players, such as when people are entertained by watching a chess championship. On the other hand, players in a game may constitute their own audience as they take their turn to play. Often, part of the entertainment for children playing a game is deciding who is part of their audience and who is a player. A toy and a game are not the same. Toys generally allow for unrestricted play whereas games present rules for the player to follow.
                Key components of games are goals, rules, challenge, and interaction. Games generally involve mental or physical stimulation, and often both. Many games help develop practical skills, serve as a form of exercise, or otherwise perform an educational, simulational, or psychological role.
                Attested as early as 2600 BC,[2][3] games are a universal part of human experience and present in all cultures. The Royal Game of Ur, Senet, and Mancala are some of the oldest known games.[4]',
                'status' => 'Accepted',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'title' => 'What is Science?',
                'slug' => 'what-is-science',
                'image' => 'Science.jpg',
                'body' => 'What is science?
                The word “science” probably brings to mind many different pictures: a fat textbook, white lab coats and microscopes, an astronomer peering through a telescope, a naturalist in the rainforest, Einstein’s equations scribbled on a chalkboard, the launch of the space shuttle, bubbling beakers …. All of those images reflect some aspect of science. But none of them provides a full picture because science has so many facets:
                Science is both a body of knowledge and a process. In school, science may sometimes seem like a collection of isolated and static facts listed in a textbook, but that’s only a small part of the story. Just as importantly, science is also a process of discovery that allows us to link isolated facts into coherent and comprehensive understandings of the natural world.
                Science is exciting. Science is a way of discovering what’s in the universe and how those things work today, how they worked in the past, and how they are likely to work in the future. Scientists are motivated by the thrill of seeing or figuring out something that no one has before.
                Science is useful. The knowledge generated by science is powerful and reliable. It can be used to develop new technologies, treat diseases, and deal with many other sorts of problems.
                Science is ongoing. Science is continually refining and expanding our knowledge of the universe, and as it does, it leads to new questions for future investigation. Science will never be “finished.”
                Science is a global human endeavor. People all over the world participate in the process of science. And you can too!',
                'status' => 'Accepted',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
