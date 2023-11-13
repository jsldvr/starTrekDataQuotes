<?php

/**
 * Returns a random quote from the Star Trek character Data.
 *
 * @return string A random quote from Data.
 */
function starTrekDataQuotes()
{
    $LtDataQuotes = [
        "I would gladly risk feeling bad at times, if it also meant that I could taste my dessert.",
        "In the event of a water landing, I have been designed to serve as a flotation device.",
        "I am programmed in multiple techniques. A broad variety of pleasuring.",
        "I am superior, sir, in many ways, but I would gladly give it up to be human.",
        "I am not qualified to answer that question, sir.",
        "Yes, Sir. I am attempting to fill a silent moment with non-relevant conversation.",
        "Could you please continue the petty bickering? I find it most amusing.",
        "The real secret is turning disadvantage into advantage.",
        "Life forms... you tiny little life forms... you precious little life forms... where are you?",
        "One is my name. The other is not.",
        "I aspire, sir, to be better than I am. Data could be better than any of us.",
        "I have found that humans often use humor as a coping mechanism during stressful situations.",
        "I cannot help but notice that your neural pathways become more efficient when you are experiencing strong emotions.",
        "As I experience certain sensory input patterns, my mental pathways become accustomed to them. The inputs eventually are anticipated and even missed when absent.",
        "I am curious. What is it like to have feelings?",
        "To laugh at oneself is the most difficult form of humor.",
        "I have often wondered about my own mortality as I have seen others around me age. Until now it has been merely theoretical.",
        "Emotions are alien to me. I am a machine."
    ];

    // Select a random quote
    $randomIndex = rand(0, count($LtDataQuotes) - 1);
    $randomQuote = $LtDataQuotes[$randomIndex];

    return "<p>$randomQuote</p>";
}

echo starTrekDataQuotes(); 