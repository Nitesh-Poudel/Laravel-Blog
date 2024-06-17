<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $blogs=collect([ 
        ['title'=>'Unleashing the Power of Emojis: Adding Color to Communication ',
        
        'passage'=>nl2br("Introduction:
Emojis have transcended their humble origins to become integral to contemporary digital communication. In this exploration, we delve into the profound influence of emojis on modern discourse, elucidating their capacity to enrich textual interactions with nuanced emotion and meaning.


Originating from the rudimentary emoticons of early digital communication, emojis have undergone a transformative evolution. From a modest set of pictorial symbols to an expansive lexicon encompassing a myriad of emotions, objects, and gestures, emojis have become a universal language in their own right.

At the heart of their ubiquity lies the profound psychological impact of emojis on communication. By imbuing textual exchanges with emotional depth and context, emojis foster empathy, understanding, and connection between individuals, transcending linguistic barriers with their universal appeal.

In the realm of marketing and branding, emojis wield considerable influence as potent tools for engagement and expression. Brands adept at leveraging emojis capitalize on their emotive power to forge authentic connections with consumers, infusing their messaging with personality and resonance.

Crucially, the push for diversity and inclusivity has reshaped the landscape of emoji design. Reflecting the rich tapestry of human experience, inclusive emoji sets celebrate cultural diversity and promote representation, fostering a more inclusive digital discourse.

As we navigate the digital landscape, emojis emerge as indispensable conduits of expression, enriching our communication with vibrancy and nuance. Embracing the language of emojis, we embark on a journey of enhanced connection, understanding, and empathy in the digital age."),

        'category_id'=>'9',
        'author_id'=>'1',
        'published'=>now()
    ],



    [
        'title'=>'Exploring the Wonders of Travel 🌍✈️',
        'passage'=>nl2br("Traveling opens the door to endless possibilities, offering enriching experiences and unforgettable memories. In this blog post, we embark on a journey to discover the transformative power of travel, exploring its profound impact on personal growth, cultural exchange, and global perspective.
        Travel is a gateway to new horizons, inviting us to step outside our comfort zones and embrace the unknown. From wandering through bustling markets to marveling at architectural wonders, each adventure brings with it a sense of discovery and wonder.
        Immersing ourselves in different cultures provides a deeper understanding of the world around us. Through interactions with locals, sampling traditional cuisines, and participating in cultural celebrations, we gain insights into diverse ways of life and foster connections that transcend borders.


From pristine beaches and lush rainforests to majestic mountains and expansive deserts, nature's beauty knows no bounds. Traveling allows us to witness the awe-inspiring wonders of the natural world, fostering a profound appreciation for our planet's diverse ecosystems.


Traveling challenges our preconceptions and broadens our worldview. Experiencing firsthand the realities of different communities and witnessing both the challenges and triumphs they face fosters empathy, compassion, and a greater sense of global citizenship.


As stewards of the environment, it's essential to travel responsibly and minimize our ecological footprint. Embracing sustainable travel practices, such as supporting local initiatives, reducing waste, and respecting wildlife, ensures that future generations can continue to enjoy the beauty of our planet.


Travel is more than just a journey from one destination to another; it's a transformative experience that enriches our lives in countless ways. As we navigate the world's diverse landscapes and cultures, let us embrace the spirit of adventure, curiosity, and respect, ensuring that every journey leaves a positive impact on both ourselves and the world around us."),

        'category_id'=>'9',
        'author_id'=>'1',
        'published'=>now()
    ]
]);


    $blogs->each(function($blog){
        Blog::create($blog);
    });

    }
}
