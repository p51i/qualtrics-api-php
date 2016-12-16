<?php

namespace Qualtrics;

class QualtricsLibraries extends Qualtrics {

  const LIBRARY_CATEGORY_INVITE = 'invite';
  const LIBRARY_CATEGORY_INACTIVESURVEY = 'inactiveSurvey';
  const LIBRARY_CATEGORY_REMINDER = 'reminder';
  const LIBRARY_CATEGORY_THANKYOU = 'thankYou';
  const LIBRARY_CATEGORY_ENDOFSURVEY = 'endOfSurvey';
  const LIBRARY_CATEGORY_GENERAL = 'general';
  const LIBRARY_CATEGORY_LOOKANDFEEL = 'lookAndFeel';
  const LIBRARY_CATEGORY_EMAILSUBJECT = 'emailSubject';
  const LIBRARY_CATEGORY_SMSINVITE = 'smsInvite';


  /**
   * Gets a library summary for the authenticated account.
   * @param string $library_id
   *   The ID of the library.
   * @param array $parameters
   *   Associative array of optional request parameters.
   *
   * @return object
   *
   * @see https://api.qualtrics.com/docs/get-library-messages
   */
  public function getLibraryMessages($library_id, $parameters = []) {
    $tokens = [
      'libraryId' => $library_id,
    ];

    return $this->request('GET', '/libraries/{libraryId}/messages', $tokens, $parameters);
  }

  /**
   * Gets a library summary for a specific campaign.
   *
   * @param string $library_id
   *   The ID of the campaign.
   * @param string $message_id
   *   The ID of the message.
   * @param array $parameters
   *   Associative array of optional request parameters.
   *
   * @return object
   *
   * @see https://api.qualtrics.com/docs/get-library-message
   */
  public function getLibraryMessage($library_id, $message_id, $parameters = []) {
    $tokens = [
      'libraryId' => $library_id,
      'messageId' => $message_id,
    ];

    return $this->request('GET', '/libraries/{libraryId}/messages/{messageId}', $tokens, $parameters);
  }

}
