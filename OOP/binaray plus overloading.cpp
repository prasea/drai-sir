#include <iostream>
using namespace std;
class Distance{
	private:
	int feet,inch;
	public:
		Distance()
		{
		}
		Distance(int f,int i)
		{
			feet=f;
			inch=i;
		}
		Distance operator + (Distance d)
		{
			Distance temp;
			temp.feet=feet+d.feet;
			temp.inch=inch+d.inch;
			if(temp.inch>=12)
			{
				temp.feet++;
				temp.inch=temp.inch-12;
			}
			return temp;
		}
		void display()
		{
			cout<<endl<<feet<<" feet "<<inch<<" inch ";
		}
};
int main()
{
	Distance d1(5,23);
	Distance d2(8,45);
	Distance d3;
	d3=d1+d2;
	d3.display();
	return 0;
}
