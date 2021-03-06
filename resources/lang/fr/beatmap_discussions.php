<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'authorizations' => [
        'update' => [
            'null_user' => 'Vous devez être connecté pour éditer.', // Base text changed from "log" to "sign"
            'system_generated' => 'Un post système ne peut être édité.',
            'wrong_user' => "Vous devez être le créateur du post pour l'éditer.",
        ],
    ],

    'events' => [
        'empty' => 'Rien ne s\'est passé... pour le moment.',
    ],

    'index' => [
        'deleted_beatmap' => 'supprimé',
        'title' => 'Discussions de Beatmap',

        'form' => [
            'deleted' => 'Inclure les discussions supprimées',

            'user' => [
                'label' => 'Utilisateur',
                'overview' => 'Activités',
            ],
        ],
    ],

    'item' => [
        'created_at' => 'Date du post',
        'deleted_at' => 'Date de suppression',
        'message_type' => 'Type',
        'permalink' => 'Permalien',
    ],

    'nearby_posts' => [
        'confirm' => 'Aucun des posts ne parle de mon problème',
        'notice' => 'Il y a des posts :timestamp (:existing_timestamps). Merci de les vérifier avant de poster.',
    ],

    'reply' => [
        'open' => [
            'guest' => 'Se connecter pour répondre',
            'user' => 'Répondre',
        ],
    ],

    'system' => [
        'resolved' => [
            'true' => 'Marqué comme résolu par :user',
            'false' => 'Réouvert par :user',
        ],
    ],

    'user' => [
        'admin' => 'administrateur',
        'bng' => 'nominateur',
        'owner' => 'mappeur',
        'qat' => 'qat',
    ],
];
