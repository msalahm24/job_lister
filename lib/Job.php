<?php
    class Job
    {
        private $db;

        public function __construct()
        {
            $this->db=new Database();
        }

        public function getAllJobs()
        {
            $this->db->query(
         " SELECT job.* , category.name AS cname
           FROM job
           INNER JOIN category 
           ON job.category_id = category.id
           ORDER BY post_date DESC"
            );

            $result=$this->db->resultSet();
            return $result;
        }

        public function getJobByCategory($cate_value)
        {
            $this->db->query(
                " SELECT job.* , categories.name AS cname
                  FROM job
                  INNER JOIN category
                  ON job.category_id = category.id
                  WHERE job.category_id = :cate_value
                  ORDER BY post_date DESC"
                   );

                   $this->db->bind(":cate_value",$cate_value);
       
                   $result=$this->db->resultSet();
                   return $result;
        }

        public function getJobById($job_id)
        {
            $this->db->query("SELECT * FROM job WHERE id = :job_id");
            $this->db->bind(':job_id',$job_id);
            $result=$this->db->singleResult();
            return $result;
        }

        public function create($data)
        {
            $this->db->query("INSERT INTO  job ( category_id , company , job_title , description , salary , location , contact_user , contact_email ) 
            VALUES ( :category_id , :company  , :job_title , :description , :salary , :location , :contact_user , :contact_email )");
            $this->db->bind(':category_id',$data['category_id']);
            $this->db->bind(':company',$data['company']);
            $this->db->bind(':job_title',$data['job_title']);
            $this->db->bind(':description',$data['description']);
            $this->db->bind(':salary',$data['salary']);
            $this->db->bind(':location',$data['location']);
            $this->db->bind(':contact_user',$data['contact_user']);
            $this->db->bind(':contact_email',$data['contact_email']);

            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function  delete($job_id)
        {
            $this->db->query("DELETE FROM job WHERE id = :job_id");
            $this->db->bind(':job_id',$job_id);
            $this->db->execute();
        }

        public function update($data)
        {
            $this->db->query("UPDATE job SET
               category_id = :category_id,
               company = :company,
               job_title = :job_title,
               description = :description,
               salary = :salary,
               location = :location,
               contact_user = :contact_user,
               contact_email = :contact_email 
                where id = :id
               ");

            $this->db->bind(':category_id',$data['category_id']);
            $this->db->bind(':company',$data['company']);
            $this->db->bind(':job_title',$data['job_title']);
            $this->db->bind(':description',$data['description']);
            $this->db->bind(':salary',$data['salary']);
            $this->db->bind(':location',$data['location']);
            $this->db->bind(':contact_user',$data['contact_user']);
            $this->db->bind(':contact_email',$data['contact_email']);
            $this->db->bind(':id',$data['id']);
            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }

        }
    }
?>
