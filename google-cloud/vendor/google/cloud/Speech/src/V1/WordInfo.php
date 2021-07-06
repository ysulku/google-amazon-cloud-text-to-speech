<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Word-specific information for recognized words.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.WordInfo</code>
 */
class WordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     */
    private $word = '';
    /**
     * A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from '1' to diarization_speaker_count.
     * speaker_tag is set if enable_speaker_diarization = 'true' and only in the
     * top alternative.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $speaker_tag = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_time
     *           Time offset relative to the beginning of the audio,
     *           and corresponding to the start of the spoken word.
     *           This field is only set if `enable_word_time_offsets=true` and only
     *           in the top hypothesis.
     *           This is an experimental feature and the accuracy of the time offset can
     *           vary.
     *     @type \Google\Protobuf\Duration $end_time
     *           Time offset relative to the beginning of the audio,
     *           and corresponding to the end of the spoken word.
     *           This field is only set if `enable_word_time_offsets=true` and only
     *           in the top hypothesis.
     *           This is an experimental feature and the accuracy of the time offset can
     *           vary.
     *     @type string $word
     *           The word corresponding to this set of information.
     *     @type int $speaker_tag
     *           A distinct integer value is assigned for every speaker within
     *           the audio. This field specifies which one of those speakers was detected to
     *           have spoken this word. Value ranges from '1' to diarization_speaker_count.
     *           speaker_tag is set if enable_speaker_diarization = 'true' and only in the
     *           top alternative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWord($var)
    {
        GPBUtil::checkString($var, True);
        $this->word = $var;

        return $this;
    }

    /**
     * A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from '1' to diarization_speaker_count.
     * speaker_tag is set if enable_speaker_diarization = 'true' and only in the
     * top alternative.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpeakerTag()
    {
        return $this->speaker_tag;
    }

    /**
     * A distinct integer value is assigned for every speaker within
     * the audio. This field specifies which one of those speakers was detected to
     * have spoken this word. Value ranges from '1' to diarization_speaker_count.
     * speaker_tag is set if enable_speaker_diarization = 'true' and only in the
     * top alternative.
     *
     * Generated from protobuf field <code>int32 speaker_tag = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpeakerTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->speaker_tag = $var;

        return $this;
    }

}

