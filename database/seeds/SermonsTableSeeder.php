<?php

class SermonsTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('sermons')->insert(array(
            array(
              'title' => 'A Lesson In Letting Go \ud83d\udcaa',
              'description' => 'A Lesson In Letting Go \r\n\r\nThis message, \u201cA Lesson In Letting Go,\u201d by Pastor Steven Furtick, from Elevation Church in Charlotte, NC, is built on the same important perspectives as last week\u2019s message \u201cLooking Forward To Normal.\u201d \r\n\r\nWhen all we\u2019ve known is busy, rest feels like something to be resisted. When all we\u2019ve known is bondage, blessings feel foreign. So Pastor Steven is teaching us how to say, \u201cI\u2019m not going back to normal, I\u2019m looking forward to freedom,\u201d as we all loosen our grip on the things we never had control over anyway. \r\n\r\nAs we dive into Exodus 14 and Romans 12 we find the most important lesson in letting go comes from the inside out. God doesn\u2019t want us to conform (outside in) any longer to the pattern of this world, but instead to be transformed (inside out) by the renewing of our minds. \r\n\r\nEmbrace this \u201cLesson In Letting Go\u201d so we can stop dwelling on what\u2019s lost and watch Him bless what\u2019s left. \r\n\r\nDon\u2019t forget to share this message with a friend and be sure to subscribe for ongoing inspiration and encouragement.',
            ),
            array(
              'title' => 'Looking Forward To Normal',
              'description' => '',
            ),
            array(
                'title' => 'THE RATTLE! OF RESURRECTION!',
                'description' => '',
            ),
            array(
                'title' => 'I Know The Way',
                'description' => '',
            ),
            array(
                'title' => 'I\u2019m Still Scared',
                'description' => '',
            ),
            array(
                'title' => 'When God Says Stop!',
                'description' => '',
            ),
            array(
                'title' => 'The Beauty Of Being Stuck',
                'description' => '',
            ),
          ));
    }
}