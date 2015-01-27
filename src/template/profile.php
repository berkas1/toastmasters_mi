<?php
$this->layout('template', array(
  'test' => 'User Profile',
  'moderator' => $this->e($feed['invitations'][0]['invitation']['moderator']),
  'date' => $this->e($feed['invitations'][0]['invitation']['event_date']),
  'invitation_text' => $this->e($feed['invitations'][0]['invitation']['invitation_text']),
  'easyspeak_link' => $this->e($feed['invitations'][0]['invitation']['easyspeak_link']),
  'meeting_place' => $meeting['place'],
  'meeting' => $meeting,
  )
);

