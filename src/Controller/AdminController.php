<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class AdminController extends EasyAdminController
{
  protected function redirectToReferrer() {
  $refererAction = $this->request->query->get('action');
    // from new|edit action, redirect to edit if possible
    if (in_array($refererAction, array('new', 'edit')) && $this->isActionAllowed('edit')) {
        $this->addFlash('success', 'Sauvegarde éffectuée');
        return $this->redirectToRoute('easyadmin', array(
            'action' => 'edit',
            'entity' => $this->entity['name'],
            'menuIndex' => $this->request->query->get('menuIndex'),
            'submenuIndex' => $this->request->query->get('submenuIndex'),
            'id' => ('new' === $refererAction)
                ? PropertyAccess::createPropertyAccessor()->getValue($this->request->attributes->get('easyadmin')['item'], $this->entity['primary_key_field_name'])
                : $this->request->query->get('id'),
        ));

    }

    return parent::redirectToReferrer();
  }
}
