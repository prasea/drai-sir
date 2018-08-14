#include <iostream>
using namespace std;
struct Distance
{
	int feet;
	float inch;	
};
Distance addDistance(Distance,Distance);
void displayDistance(Distance d);
int main()
{
	Distance d1,d2,d3;
	d1={13,2.68};
	cout<<"Enter second distance";
	cin>>d2.feet>>d3.inch;
	d3=addDistance(d1,d2);
	cout<<"The added distance"<<displayDistance(d3);
	return 0;
}
Distance addDistance(Distance dd1,Distance dd2)
{
	Distance dd3;
	dd3.feet=0;
	dd3.inch=dd1.inch+dd2.inch;
	if(dd3.inch>=12)
	{
		dd3.inch-=12;
		dd3.feet++;
	}
	dd3.feet+=dd1.feet+dd2.feet;
	return dd3;
}
void displayDistance(Distance d)
{
	cout<<"Feet= "<<d.feet<<" inch = "<<d.inch
}
