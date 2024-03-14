class User extends Model {
    public function courses() {
        return $this->belongsToMany(Course::class, 'course_users')->withPivot('role');
    }

    // Otras relaciones
}
