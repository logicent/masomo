<?php

echo $this->render('../_table/_row_inputs', [
        'modelClass' => $modelClass,
        'model' => $model,
        'rowId' => $rowId
    ]) ?>