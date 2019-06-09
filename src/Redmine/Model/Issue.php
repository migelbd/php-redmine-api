<?php


namespace Redmine\Model;


class Issue
{

    protected $id;
    public $project;
    public $tracker;
    public $status;
    public $priority;
    public $author;
    public $category;
    public $subject;
    public $description;
    public $start_date;
    public $due_date;
    public $done_ratio;
    public $estimated_hours;

    /**
     * @var CustomField[]
     */
    public $custom_fields;
    public $created_on;
    public $updated_on;


    /**
     * Issue constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        foreach ( $data as $k => $v ) {

            if ( is_array($v) && isset($v['id']) ) {
                if ( $k === 'custom_fields' ) {
                    foreach ( $v as $item ) {
                        $this->custom_fields[] = new CustomField($item['id'], $item['name'], $item['value']);
                    }
                }
                else {
                    $this->$k = new Field($v['id'], $v['name']);
                }
            }
            else {
                $this->$k = $v;
            }
        }
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }


    /**
     * @return mixed
     */
    public function getTracker()
    {
        return $this->tracker;
    }


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }


    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }


    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->due_date;
    }


    /**
     * @return mixed
     */
    public function getDoneRatio()
    {
        return $this->done_ratio;
    }


    /**
     * @return mixed
     */
    public function getEstimatedHours()
    {
        return $this->estimated_hours;
    }


    /**
     * @return CustomField[]
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }


    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }


    /**
     * @return mixed
     */
    public function getUpdatedOn()
    {
        return $this->updated_on;
    }

}
