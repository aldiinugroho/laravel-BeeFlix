<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class episodeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('episodes')->insert([
            // itaewon
            [
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'On his first day at a new high school.'
            ],
            [
                'movie_id' => '1',
                'episode' => '2',
                'title' => 'While serving his time.'
            ],
            [
                'movie_id' => '1',
                'episode' => '3',
                'title' => 'Saeroyi crosses paths with Jo Yi-seo.'
            ],
            [
                'movie_id' => '1',
                'episode' => '4',
                'title' => 'Choi Seung-kwon regrets reverting back to his old ways.'
            ],
            [
                'movie_id' => '1',
                'episode' => '5',
                'title' => 'Before its reopening, DanBam gets a few upgrades.'
            ],
            [
                'movie_id' => '1',
                'episode' => '6',
                'title' => 'Dae-hee keeps tabs on DanBam progress.'
            ],
            [
                'movie_id' => '1',
                'episode' => '7',
                'title' => 'DanBam gets an unwelcome visitor.'
            ],
            [
                'movie_id' => '1',
                'episode' => '8',
                'title' => 'Bad news strikes DanBam.'
            ],
            [
                'movie_id' => '1',
                'episode' => '9',
                'title' => 'The bars move to a quieter street.'
            ],
            [
                'movie_id' => '1',
                'episode' => '10',
                'title' => 'Jangga finds itself in hot water with the public.'
            ],
            [
                'movie_id' => '1',
                'episode' => '11',
                'title' => 'After Ma Hyun-yi makes a buzzy TV appearance.'
            ],
            [
                'movie_id' => '1',
                'episode' => '12',
                'title' => 'While navigating their latest crisis.'
            ],
            [
                'movie_id' => '1',
                'episode' => '13',
                'title' => 'Geun-soo moves closer to his goal.'
            ],
            [
                'movie_id' => '1',
                'episode' => '14',
                'title' => 'Yi-seo overworks herself.'
            ],
            [
                'movie_id' => '1',
                'episode' => '15',
                'title' => 'Searching for Yi-seo, Seung-kwon pays his old boss a visit.'
            ],
            [
                'movie_id' => '1',
                'episode' => '16',
                'title' => 'Yi-seo runs from Geun-won.'
            ],
            // the world
            [
                'movie_id' => '2',
                'episode' => '1',
                'title' => 'Ji Sun-woo works as a doctor.'
            ],
            [
                'movie_id' => '2',
                'episode' => '2',
                'title' => 'Sun-woo imagines Tae-oh cheating on her.'
            ],
            [
                'movie_id' => '2',
                'episode' => '3',
                'title' => 'Sun-woo tries to find out who Tae-ohs heart.'
            ],
            [
                'movie_id' => '2',
                'episode' => '4',
                'title' => 'Sun-woo moves with her plans to divorce Tae-oh.'
            ],
            [
                'movie_id' => '2',
                'episode' => '5',
                'title' => 'As Sun-woo becomes overwhelmed with doubt and anxiety.'
            ],
            [
                'movie_id' => '2',
                'episode' => '6',
                'title' => 'Sun-woo and Tae-oh continue to blame.'
            ],
            [
                'movie_id' => '2',
                'episode' => '7',
                'title' => 'Two years after his divorce with Sun-woo.'
            ],
            [
                'movie_id' => '2',
                'episode' => '8',
                'title' => 'After the night when her house was attacked.'
            ],
            [
                'movie_id' => '2',
                'episode' => '9',
                'title' => 'Da-kyung is suspicious of Sun-woos motives.'
            ],
            [
                'movie_id' => '2',
                'episode' => '10',
                'title' => 'Tae-oh barges in Sun-woos house late.'
            ],
            [
                'movie_id' => '2',
                'episode' => '11',
                'title' => 'The accident at Go-san Station causes a big uproar in Go-san.'
            ],
            [
                'movie_id' => '2',
                'episode' => '12',
                'title' => 'Tae-oh is helped by Sun-woo during a police investigation.'
            ],
            [
                'movie_id' => '2',
                'episode' => '13',
                'title' => 'Joon-young, knowing that things can never go back.'
            ],
            [
                'movie_id' => '2',
                'episode' => '14',
                'title' => 'Sun-woo decides that its best for her son.'
            ],
            [
                'movie_id' => '2',
                'episode' => '15',
                'title' => 'Sun-woo and Joon-young prepares to leave.'
            ],
            [
                'movie_id' => '2',
                'episode' => '16',
                'title' => 'Cutting off your spouse with whom you shared half.'
            ],
            // start-up
            [
                'movie_id' => '3',
                'episode' => '1',
                'title' => 'Start-Up.'
            ],
            [
                'movie_id' => '3',
                'episode' => '2',
                'title' => 'Family, Friend, and everything.'
            ],
            [
                'movie_id' => '3',
                'episode' => '3',
                'title' => 'Angel.'
            ],
            [
                'movie_id' => '3',
                'episode' => '4',
                'title' => 'Sand box.'
            ],
            [
                'movie_id' => '3',
                'episode' => '5',
                'title' => 'Hack week.'
            ],
            [
                'movie_id' => '3',
                'episode' => '6',
                'title' => 'Key people.'
            ],
            [
                'movie_id' => '3',
                'episode' => '7',
                'title' => 'Unknown people.'
            ],
            // waikiki 2
            [
                'movie_id' => '4',
                'episode' => '1',
                'title' => 'Stars Falling from the Sky.'
            ],
            [
                'movie_id' => '4',
                'episode' => '2',
                'title' => 'Small Lies Snowball into Big Ones.'
            ],
            [
                'movie_id' => '4',
                'episode' => '3',
                'title' => 'The World That They Live In.'
            ],
            [
                'movie_id' => '4',
                'episode' => '4',
                'title' => 'Troublemaker Sister.'
            ],
            [
                'movie_id' => '4',
                'episode' => '5',
                'title' => 'Dreams Come True.'
            ],
            [
                'movie_id' => '4',
                'episode' => '6',
                'title' => 'Singing Lesson.'
            ],
            [
                'movie_id' => '4',
                'episode' => '7',
                'title' => 'Pervert in the Guesthouse.'
            ],
            [
                'movie_id' => '4',
                'episode' => '8',
                'title' => 'Dear My Friends.'
            ],
            [
                'movie_id' => '4',
                'episode' => '9',
                'title' => 'Getting a Job.'
            ],
            [
                'movie_id' => '4',
                'episode' => '10',
                'title' => 'Securing Your Place.'
            ],
            [
                'movie_id' => '4',
                'episode' => '11',
                'title' => 'Goodbye, My Love.'
            ],
            [
                'movie_id' => '4',
                'episode' => '12',
                'title' => 'Do Whatever it Takes.'
            ],
            [
                'movie_id' => '4',
                'episode' => '13',
                'title' => 'All a Mistake.'
            ],
            [
                'movie_id' => '4',
                'episode' => '14',
                'title' => 'Where are We Headed to?.'
            ],
            [
                'movie_id' => '4',
                'episode' => '15',
                'title' => 'Why Do I Feel This Way?.'
            ],
            [
                'movie_id' => '4',
                'episode' => '16',
                'title' => 'Goodbye, Waikiki.'
            ],
            // kids
            // wbb
            [
                'movie_id' => '5',
                'episode' => '1',
                'title' => 'Pencarian hutan mister.'
            ],
            [
                'movie_id' => '5',
                'episode' => '2',
                'title' => 'Terdamparnya 3 beruang bersaudara.'
            ],
            [
                'movie_id' => '5',
                'episode' => '3',
                'title' => 'Para beruang kesulitan mencari jalan.'
            ],
            [
                'movie_id' => '5',
                'episode' => '4',
                'title' => 'Beruang bersaudara mendapat pertolongan.'
            ],
            [
                'movie_id' => '5',
                'episode' => '5',
                'title' => 'Tertinggalnya beruang putih.'
            ],
            [
                'movie_id' => '5',
                'episode' => '6',
                'title' => 'Bersatunya kemabali beruang bersaudara.'
            ],
            // rugrats
            [
                'movie_id' => '6',
                'episode' => '1',
                'title' => 'Perkumpulan para bayi.'
            ],
            [
                'movie_id' => '6',
                'episode' => '2',
                'title' => 'Seorang bayi jenius yang mengajari temannya berpetualang.'
            ],
            [
                'movie_id' => '6',
                'episode' => '3',
                'title' => 'Para bayi memulai perjalanan mereka.'
            ],
            [
                'movie_id' => '6',
                'episode' => '4',
                'title' => 'Bayi jenius menjinakkan kucing yang menggangu.'
            ],
            [
                'movie_id' => '6',
                'episode' => '5',
                'title' => 'Para bayi kuat jika bersama.'
            ],
            [
                'movie_id' => '6',
                'episode' => '6',
                'title' => 'Bayi mencapai tujuan mereka dan mendapatkan impiannya.'
            ],
            // one punch
            [
                'movie_id' => '7',
                'episode' => '1',
                'title' => 'The Strongest Man.'
            ],
            [
                'movie_id' => '7',
                'episode' => '2',
                'title' => 'The Lone Cyborg.'
            ],
            [
                'movie_id' => '7',
                'episode' => '3',
                'title' => 'The Obsessive Scientist.'
            ],
            [
                'movie_id' => '7',
                'episode' => '4',
                'title' => 'The Modern Ninja.'
            ],
            [
                'movie_id' => '7',
                'episode' => '5',
                'title' => 'The Ultimate Master.'
            ],
            [
                'movie_id' => '7',
                'episode' => '6',
                'title' => 'The Terrifying City.'
            ],
            // power ranger
            [
                'movie_id' => '8',
                'episode' => '1',
                'title' => 'Mighty Morphin Power Rangers.'
            ],
            [
                'movie_id' => '8',
                'episode' => '2',
                'title' => 'Mighty Morphin Alien Rangers.'
            ],
            [
                'movie_id' => '8',
                'episode' => '3',
                'title' => 'Power Rangers Zeo.'
            ],
            [
                'movie_id' => '8',
                'episode' => '4',
                'title' => 'Power Rangers Turbo.'
            ],
            [
                'movie_id' => '8',
                'episode' => '5',
                'title' => 'Power Rangers in Space.'
            ],
            [
                'movie_id' => '8',
                'episode' => '6',
                'title' => 'Power Rangers Lost Galaxy.'
            ],
            // tv show
            // fallon
            [
                'movie_id' => '9',
                'episode' => '1',
                'title' => 'Post Malone.'
            ],
            [
                'movie_id' => '9',
                'episode' => '2',
                'title' => 'James Spader, Chris Paul, Josh Johnson.'
            ],
            [
                'movie_id' => '9',
                'episode' => '3',
                'title' => 'Michael Strahan, Brené Brown.'
            ],
            [
                'movie_id' => '9',
                'episode' => '4',
                'title' => 'Vince Vaughn, Lorraine Bracco.'
            ],
            [
                'movie_id' => '9',
                'episode' => '5',
                'title' => 'Kaley Cuoco, Megan Rapinoe.'
            ],
            [
                'movie_id' => '9',
                'episode' => '6',
                'title' => 'Milo Ventimiglia, Marc Maron.'
            ],
            // corden
            [
                'movie_id' => '10',
                'episode' => '1',
                'title' => 'Rachel Brosnahan, RuPaul.'
            ],
            [
                'movie_id' => '10',
                'episode' => '2',
                'title' => 'Steve Buscemi, Tim Roth.'
            ],
            [
                'movie_id' => '10',
                'episode' => '3',
                'title' => 'January Jones, John Cena.'
            ],
            [
                'movie_id' => '10',
                'episode' => '4',
                'title' => 'Bradley Whitford, Brett Gelman.'
            ],
            [
                'movie_id' => '10',
                'episode' => '5',
                'title' => 'Jane Fonda, Lily Tomlin.'
            ],
            [
                'movie_id' => '10',
                'episode' => '6',
                'title' => 'Charlie Hunnam, Jesse Tyler Ferguson.'
            ],
            // lip
            [
                'movie_id' => '11',
                'episode' => '1',
                'title' => 'Johnson: Shake It Off by Taylor Swift.'
            ],
            [
                'movie_id' => '11',
                'episode' => '2',
                'title' => 'Common: I Want You Back by Jackson 5.'
            ],
            [
                'movie_id' => '11',
                'episode' => '3',
                'title' => 'Hathaway: Love by Mary J. Blige.'
            ],
            [
                'movie_id' => '11',
                'episode' => '4',
                'title' => 'Kendrick: Steal My Girl by One Direction.'
            ],
            [
                'movie_id' => '11',
                'episode' => '5',
                'title' => 'Crews: Sucker M.C.s by Run–D.M.C.'
            ],
            [
                'movie_id' => '11',
                'episode' => '6',
                'title' => 'Kotb: Baby Got Back by Sir Mix-a-Lot.'
            ],
            // master
            [
                'movie_id' => '12',
                'episode' => '1',
                'title' => 'Memasak ikan bakar.'
            ],
            [
                'movie_id' => '12',
                'episode' => '2',
                'title' => 'babak penyisihan 1.'
            ],
            [
                'movie_id' => '12',
                'episode' => '3',
                'title' => 'Masakan challange.'
            ],
            [
                'movie_id' => '12',
                'episode' => '4',
                'title' => 'Babak penyisihan 2.'
            ],
            [
                'movie_id' => '12',
                'episode' => '5',
                'title' => 'Cheff tamu.'
            ],
            [
                'movie_id' => '12',
                'episode' => '6',
                'title' => 'Final master cheff.'
            ]
        ]);
    }
}
