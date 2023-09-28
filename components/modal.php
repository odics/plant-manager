<?php

function renderModal(string $modalTitle, string $modalBody): string
{
    return '
    <div class="modal-overlay" id="modal-overlay"></div>
        <div class="modal" id="modal">
            <div class="form-card new-plant">
                <div class="form-header">'
            . $modalTitle .
            '</div>
                <div class="form-card-body">'
            . $modalBody .
            '</div>
            </div>
        </div>';
}
