<?php

class VueFAQ extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function afficher_faq($faqData)
    {
        ?>

        <style>
            #faq-card {
                width: 80vw;

                max-width: 100%;

                margin-left: auto;

                margin-right: auto;
                box-sizing: border-box;
                margin: 10px auto;
                overflow: auto;
            }

            .question {}
        </style>



        <div class="accordion" id="accordionExample">
            <?php foreach ($faqData as $index => $qa): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header question" id="heading<?php echo $index; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false"
                            aria-controls="collapse<?php echo $index; ?>">
                            <?php echo htmlspecialchars($qa['question']); ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse"
                        aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php echo htmlspecialchars($qa['reponse']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php
    }

}
?>