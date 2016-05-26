<?php namespace Indikator\User;

use System\Classes\PluginBase;
use RainLab\User\Controllers\Users as UsersController;
use RainLab\User\Models\User as UserModel;
use Lang;

class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.user::lang.plugin.name',
            'description' => 'indikator.user::lang.plugin.description',
            'author'      => 'indikator.user::lang.plugin.author',
            'icon'        => 'icon-user-plus',
            'homepage'    => 'https://github.com/gergo85/oc-user-plus'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\User\ReportWidgets\Users' => [
                'label'   => 'indikator.user::lang.widget.title',
                'context' => 'dashboard'
            ]
        ];
    }

    public function boot()
    {
        UserModel::extend(function($model) {
            $model->addFillable([
                'iu_gender',
                'iu_telephone',
                'iu_job',
                'iu_company',
                'iu_about',
                'iu_webpage',
                'iu_blog',
                'iu_facebook',
                'iu_twitter',
                'iu_skype',
                'iu_linkedin',
                'iu_comment',
                'iu_mobile',
                'iu_fax',
                'iu_cpf',
                'iu_cnpj',
                'iu_position',
                'iu_country',
                'iu_state',
                'iu_city',
                'iu_address',
                'iu_zipcode',
                'iu_zipcode',
                'iu_zipcode'

            ]);
        });
      
        UsersController::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof UserModel) {
                return;
            }

            $form->addTabFields([
                'iu_gender' => [
                    'label'   => 'indikator.user::lang.personal.gender',
                    'tab'     => 'indikator.user::lang.personal.tab',
                    'type'    => 'dropdown',
                    'options' => [
                        'unknown' => Lang::get('indikator.user::lang.gender.unknown'),
                        'female'  => Lang::get('indikator.user::lang.gender.female'),
                        'male'    => Lang::get('indikator.user::lang.gender.male')
                    ],
                    'span'    => 'auto'
                ],
                'iu_telephone' => [
                    'label' => 'indikator.user::lang.personal.telephone',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_mobile' => [
                    'label' => 'mobile',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_fax' => [
                    'label' => 'fax',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_cpf' => [
                    'label' => 'cpf',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_job' => [
                    'label' => 'indikator.user::lang.personal.job',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_company' => [
                    'label' => 'indikator.user::lang.personal.company',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_position' => [
                    'label' => 'position',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_country' => [
                    'label' => 'country',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_state' => [
                    'label' => 'state',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_city' => [
                    'label' => 'city',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_address' => [
                    'label' => 'address',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],
                'iu_zipcode' => [
                    'label' => 'zipcode',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],

                'iu_cnpj' => [
                    'label' => 'cnpj',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'span'  => 'auto'
                ],

                'iu_about' => [
                    'label' => 'indikator.user::lang.personal.about',
                    'tab'   => 'indikator.user::lang.personal.tab',
                    'type'  => 'textarea',
                    'size'  => 'small',
                    'span'  => 'full'
                ],
                'iu_webpage' => [
                    'label' => 'indikator.user::lang.internet.webpage',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_blog' => [
                    'label' => 'indikator.user::lang.internet.blog',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_facebook' => [
                    'label' => 'indikator.user::lang.internet.facebook',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_twitter' => [
                    'label' => 'indikator.user::lang.internet.twitter',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_skype' => [
                    'label' => 'indikator.user::lang.internet.skype',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_linkedin' => [
                    'label' => 'indikator.user::lang.internet.icq',
                    'tab'   => 'indikator.user::lang.internet.tab',
                    'span'  => 'auto'
                ],
                'iu_tag_name' => [
                'label' => 'Nome per la ricerca (p.e.: Alessandro-Atemporale)',
                'tab'   => 'indikator.user::lang.personal.tab',
                'span'  => 'auto'
            ]
            ]);

            $form->addSecondaryTabFields([
                'iu_comment' => [
                    'label' => 'indikator.user::lang.comment',
                    'type'  => 'textarea',
                    'size'  => 'small'
                ]
            ]);
        });
    }
}
