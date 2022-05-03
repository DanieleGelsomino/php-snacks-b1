<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragraf e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<?php

$longest_paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam placeat dolorem architecto. Quod nobis necessitatibus at qui nostrum optio est. odio officiis voluptatum ab laboriosam blanditiis repellat velit a excepturi consectetur rerum eveniet vero adipisci ex maiores. Consequatur quo repudiandae rerum voluptates fugiat sequi dolore atque, veritatis non quia! Laborum aperiam, accusamus rerum hic omnis consequatur libero, soluta, quis quaerat sunt dolor possimus est ullam quo nisi. Magnam pariatur cum soluta necessitatibus fugit sequi, perferendis alias nisi non accusamus doloremque deleniti temporibus et nam delectus vel amet ut excepturi? Blanditiis similique voluptas impedit laborum amet repellat, quaerat explicabo adipisci.';
$paragraphs = explode('.', $longest_paragraph);

for($i=0; $i < count($paragraphs); $i++) {
    $new_paragraphs = $paragraphs[$i];

    echo('<p>');
    echo($new_paragraphs);
    echo('</p>');

}

?>


